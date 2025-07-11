// Constants
const TRANS_EVENTS = ['transitionend', 'webkitTransitionEnd', 'oTransitionEnd']
const TRANS_PROPERTIES = ['transition', 'MozTransition', 'webkitTransition', 'WebkitTransition', 'OTransition']

// Inline styles used for full navbar layout & sticky layout
const INLINE_STYLES = `
.layout-menu-fixed .layout-navbar-full .layout-menu,
.layout-menu-fixed-offcanvas .layout-navbar-full .layout-menu {
  top: {navbarHeight}px !important;
}
.layout-page {
  padding-top: {navbarHeight}px !important;
}
.content-wrapper {
  padding-bottom: {footerHeight}px !important;
}`

// Guard
function requiredParam(name) {
  throw new Error(`Parameter required${name ? `: \`${name}\`` : ''}`)
}

const Helpers = {
  // Root Element
  ROOT_EL: typeof window !== 'undefined' ? document.documentElement : null,

  prefix: getComputedStyle(document.documentElement).getPropertyValue('--prefix').trim(),

  // Large screens breakpoint
  LAYOUT_BREAKPOINT: 1200,

  // Resize delay in milliseconds
  RESIZE_DELAY: 200,

  menuPsScroll: null,

  mainMenu: null,

  // Internal variables
  _curStyle: null,
  _styleEl: null,
  _resizeTimeout: null,
  _resizeCallback: null,
  _transitionCallback: null,
  _transitionCallbackTimeout: null,
  _listeners: [],
  _initialized: false,
  _autoUpdate: false,
  // _lastWindowHeight: 0,

  // *******************************************************************************
  // * Utilities

  // ---
  // Set cookie with expiration
  _setCookie(name, value, daysToExpire = 365, path = '/', domain = '') {
    const cookie = `${encodeURIComponent(name)}=${encodeURIComponent(value)}`

    let expires = ''
    if (daysToExpire) {
      const expirationDate = new Date()
      expirationDate.setTime(expirationDate.getTime() + daysToExpire * 24 * 60 * 60 * 1000)
      expires = `; expires=${expirationDate.toUTCString()}`
    }

    const pathString = `; path=${path}`
    const domainString = domain ? `; domain=${domain}` : ''

    document.cookie = `${cookie}${expires}${pathString}${domainString}`
  },

  // Get cookie by name
  _getCookie(name) {
    const cookies = document.cookie.split('; ')

    for (let i = 0; i < cookies.length; i++) {
      const [cookieName, cookieValue] = cookies[i].split('=')
      if (decodeURIComponent(cookieName) === name) {
        return decodeURIComponent(cookieValue)
      }
    }

    return null
  },

  // ---
  // Scroll To Active Menu Item
  _scrollToActive(animate = false, duration = 500) {
    const layoutMenu = this.getLayoutMenu()

    if (!layoutMenu) return

    let activeEl = layoutMenu.querySelector('li.menu-item.active:not(.open)')

    if (activeEl) {
      // t = current time
      // b = start value
      // c = change in value
      // d = duration
      const easeInOutQuad = (t, b, c, d) => {
        t /= d / 2
        if (t < 1) return (c / 2) * t * t + b
        t -= 1
        return (-c / 2) * (t * (t - 2) - 1) + b
      }

      const element = this.getLayoutMenu().querySelector('.menu-inner')

      if (typeof activeEl === 'string') {
        activeEl = document.querySelector(activeEl)
      }
      if (typeof activeEl !== 'number') {
        activeEl = activeEl.getBoundingClientRect().top + element.scrollTop
      }

      // If active element's top position is less than 2/3 (66%) of menu height than do not scroll
      if (activeEl < parseInt((element.clientHeight * 2) / 3, 10)) return

      const start = element.scrollTop
      const change = activeEl - start - parseInt(element.clientHeight / 2, 10)
      const startDate = +new Date()

      if (animate === true) {
        const animateScroll = () => {
          const currentDate = +new Date()
          const currentTime = currentDate - startDate
          const val = easeInOutQuad(currentTime, start, change, duration)
          element.scrollTop = val
          if (currentTime < duration) {
            requestAnimationFrame(animateScroll)
          } else {
            element.scrollTop = change
          }
        }
        animateScroll()
      } else {
        element.scrollTop = change
      }
    }
  },

  // ---
  // Swipe In Gesture
  _swipeIn(targetEl, callback) {
    const { Hammer } = window
    if (typeof Hammer !== 'undefined' && typeof targetEl === 'string') {
      // Swipe menu gesture
      const swipeInElement = document.querySelector(targetEl)

      if (swipeInElement) {
        const hammerInstance = new Hammer(swipeInElement)

        hammerInstance.on('panright', callback)
      }
    }
  },

  // ---
  // Swipe Out Gesture
  _swipeOut(targetEl, callback) {
    const { Hammer } = window
    if (typeof Hammer !== 'undefined' && typeof targetEl === 'string') {
      setTimeout(() => {
        // Swipe menu gesture
        const swipeOutElement = document.querySelector(targetEl)

        if (swipeOutElement) {
          const hammerInstance = new Hammer(swipeOutElement)

          hammerInstance.get('pan').set({ direction: Hammer.DIRECTION_ALL, threshold: 250 })
          hammerInstance.on('panleft', callback)
        }
      }, 500)
    }
  },

  // ---
  // Add classes
  _addClass(cls, el = this.ROOT_EL) {
    if (el && el.length !== undefined) {
      // Add classes to multiple elements
      el.forEach(e => {
        if (e) {
          cls.split(' ').forEach(c => e.classList.add(c))
        }
      })
    } else if (el) {
      // Add classes to single element
      cls.split(' ').forEach(c => el.classList.add(c))
    }
  },

  // ---
  // Remove classes
  _removeClass(cls, el = this.ROOT_EL) {
    if (el && el.length !== undefined) {
      // Remove classes to multiple elements
      el.forEach(e => {
        if (e) {
          cls.split(' ').forEach(c => e.classList.remove(c))
        }
      })
    } else if (el) {
      // Remove classes to single element
      cls.split(' ').forEach(c => el.classList.remove(c))
    }
  },

  // Toggle classes
  _toggleClass(el = this.ROOT_EL, cls1, cls2) {
    if (el.classList.contains(cls1)) {
      el.classList.replace(cls1, cls2)
    } else {
      el.classList.replace(cls2, cls1)
    }
  },

  // ---
  // Has class
  _hasClass(cls, el = this.ROOT_EL) {
    let result = false

    cls.split(' ').forEach(c => {
      if (el.classList.contains(c)) result = true
    })

    return result
  },

  _findParent(el, cls) {
    if ((el && el.tagName.toUpperCase() === 'BODY') || el.tagName.toUpperCase() === 'HTML') return null
    el = el.parentNode
    while (el && el.tagName.toUpperCase() !== 'BODY' && !el.classList.contains(cls)) {
      el = el.parentNode
    }
    el = el && el.tagName.toUpperCase() !== 'BODY' ? el : null
    return el
  },

  // ---
  // Trigger window event
  _triggerWindowEvent(name) {
    if (typeof window === 'undefined') return

    if (document.createEvent) {
      let event

      if (typeof Event === 'function') {
        event = new Event(name)
      } else {
        event = document.createEvent('Event')
        event.initEvent(name, false, true)
      }

      window.dispatchEvent(event)
    } else {
      window.fireEvent(`on${name}`, document.createEventObject())
    }
  },

  // ---
  // Trigger event
  _triggerEvent(name) {
    this._triggerWindowEvent(`layout${name}`)

    this._listeners.filter(listener => listener.event === name).forEach(listener => listener.callback.call(null))
  },

  // ---
  // Update style
  _updateInlineStyle(navbarHeight = 0, footerHeight = 0) {
    if (!this._styleEl) {
      this._styleEl = document.createElement('style')
      this._styleEl.type = 'text/css'
      document.head.appendChild(this._styleEl)
    }

    const newStyle = INLINE_STYLES.replace(/\{navbarHeight\}/gi, navbarHeight).replace(
      /\{footerHeight\}/gi,
      footerHeight
    )

    if (this._curStyle !== newStyle) {
      this._curStyle = newStyle
      this._styleEl.textContent = newStyle
    }
  },

  // ---
  // Remove style
  _removeInlineStyle() {
    if (this._styleEl) document.head.removeChild(this._styleEl)
    this._styleEl = null
    this._curStyle = null
  },

  // ---
  // Redraw layout menu (Safari bugfix)
  _redrawLayoutMenu() {
    const layoutMenu = this.getLayoutMenu()

    if (layoutMenu && layoutMenu.querySelector('.menu')) {
      const inner = layoutMenu.querySelector('.menu-inner')
      const { scrollTop } = inner
      const pageScrollTop = document.documentElement.scrollTop

      layoutMenu.style.display = 'none'
      // layoutMenu.offsetHeight
      layoutMenu.style.display = ''
      inner.scrollTop = scrollTop
      document.documentElement.scrollTop = pageScrollTop

      return true
    }

    return false
  },

  // ---
  // Check for transition support
  _supportsTransitionEnd() {
    if (window.QUnit) return false

    const el = document.body || document.documentElement

    if (!el) return false

    let result = false
    TRANS_PROPERTIES.forEach(evnt => {
      if (typeof el.style[evnt] !== 'undefined') result = true
    })

    return result
  },

  // ---
  // Calculate current navbar height
  _getNavbarHeight() {
    const layoutNavbar = this.getLayoutNavbar()

    if (!layoutNavbar) return 0
    if (!this.isSmallScreen()) return layoutNavbar.getBoundingClientRect().height

    // Needs some logic to get navbar height on small screens

    const clonedEl = layoutNavbar.cloneNode(true)
    clonedEl.id = null
    clonedEl.style.visibility = 'hidden'
    clonedEl.style.position = 'absolute'

    Array.prototype.slice.call(clonedEl.querySelectorAll('.collapse.show')).forEach(el => this._removeClass('show', el))

    layoutNavbar.parentNode.insertBefore(clonedEl, layoutNavbar)

    const navbarHeight = clonedEl.getBoundingClientRect().height

    clonedEl.parentNode.removeChild(clonedEl)

    return navbarHeight
  },

  // ---
  // Get current footer height
  _getFooterHeight() {
    const layoutFooter = this.getLayoutFooter()

    if (!layoutFooter) return 0

    return layoutFooter.getBoundingClientRect().height
  },

  // ---
  // Get animation duration of element
  _getAnimationDuration(el) {
    const duration = window.getComputedStyle(el).transitionDuration

    return parseFloat(duration) * (duration.indexOf('ms') !== -1 ? 1 : 1000)
  },

  // ---
  // Set menu hover state
  _setMenuHoverState(hovered) {
    this[hovered ? '_addClass' : '_removeClass']('layout-menu-hover')
  },

  // ---
  // Toggle collapsed
  _setCollapsed(collapsed) {
    if (this.isSmallScreen()) {
      if (collapsed) {
        this._removeClass('layout-menu-expanded')
      } else {
        setTimeout(
          () => {
            this._addClass('layout-menu-expanded')
          },
          this._redrawLayoutMenu() ? 5 : 0
        )
      }
    } else {
      this[collapsed ? '_addClass' : '_removeClass']('layout-menu-collapsed')
    }
  },

  // ---
  // Add layout sidenav toggle animationEnd event
  _bindLayoutAnimationEndEvent(modifier, cb) {
    const menu = this.getMenu()
    const duration = menu ? this._getAnimationDuration(menu) + 50 : 0

    if (!duration) {
      modifier.call(this)
      cb.call(this)
      return
    }

    this._transitionCallback = e => {
      if (e.target !== menu) return
      this._unbindLayoutAnimationEndEvent()
      cb.call(this)
    }

    TRANS_EVENTS.forEach(e => {
      menu.addEventListener(e, this._transitionCallback, false)
    })

    modifier.call(this)

    this._transitionCallbackTimeout = setTimeout(() => {
      this._transitionCallback.call(this, { target: menu })
    }, duration)
  },

  // ---
  // Remove layout sidenav toggle animationEnd event
  _unbindLayoutAnimationEndEvent() {
    const menu = this.getMenu()

    if (this._transitionCallbackTimeout) {
      clearTimeout(this._transitionCallbackTimeout)
      this._transitionCallbackTimeout = null
    }

    if (menu && this._transitionCallback) {
      TRANS_EVENTS.forEach(e => {
        menu.removeEventListener(e, this._transitionCallback, false)
      })
    }

    if (this._transitionCallback) {
      this._transitionCallback = null
    }
  },

  // ---
  // Bind delayed window resize event
  _bindWindowResizeEvent() {
    this._unbindWindowResizeEvent()

    const cb = () => {
      if (this._resizeTimeout) {
        clearTimeout(this._resizeTimeout)
        this._resizeTimeout = null
      }
      this._triggerEvent('resize')
    }

    this._resizeCallback = () => {
      if (this._resizeTimeout) clearTimeout(this._resizeTimeout)
      this._resizeTimeout = setTimeout(cb, this.RESIZE_DELAY)
    }

    window.addEventListener('resize', this._resizeCallback, false)
  },

  // ---
  // Unbind delayed window resize event
  _unbindWindowResizeEvent() {
    if (this._resizeTimeout) {
      clearTimeout(this._resizeTimeout)
      this._resizeTimeout = null
    }

    if (this._resizeCallback) {
      window.removeEventListener('resize', this._resizeCallback, false)
      this._resizeCallback = null
    }
  },

  _bindMenuMouseEvents() {
    if (this._menuMouseEnter && this._menuMouseLeave && this._windowTouchStart) return

    const layoutMenu = this.getLayoutMenu()
    if (!layoutMenu) return this._unbindMenuMouseEvents()

    if (!this._menuMouseEnter) {
      this._menuMouseEnter = () => {
        if (
          this.isSmallScreen() ||
          !this._hasClass('layout-menu-collapsed') ||
          this.isOffcanvas() ||
          this._hasClass('layout-transitioning')
        ) {
          return this._setMenuHoverState(false)
        }

        return this._setMenuHoverState(true)
      }
      layoutMenu.addEventListener('mouseenter', this._menuMouseEnter, false)
      layoutMenu.addEventListener('touchstart', this._menuMouseEnter, false)
    }

    if (!this._menuMouseLeave) {
      this._menuMouseLeave = () => {
        this._setMenuHoverState(false)
      }
      layoutMenu.addEventListener('mouseleave', this._menuMouseLeave, false)
    }

    if (!this._windowTouchStart) {
      this._windowTouchStart = e => {
        if (!e || !e.target || !this._findParent(e.target, '.layout-menu')) {
          this._setMenuHoverState(false)
        }
      }
      window.addEventListener('touchstart', this._windowTouchStart, true)
    }
  },

  _unbindMenuMouseEvents() {
    if (!this._menuMouseEnter && !this._menuMouseLeave && !this._windowTouchStart) return

    const layoutMenu = this.getLayoutMenu()

    if (this._menuMouseEnter) {
      if (layoutMenu) {
        layoutMenu.removeEventListener('mouseenter', this._menuMouseEnter, false)
        layoutMenu.removeEventListener('touchstart', this._menuMouseEnter, false)
      }
      this._menuMouseEnter = null
    }

    if (this._menuMouseLeave) {
      if (layoutMenu) {
        layoutMenu.removeEventListener('mouseleave', this._menuMouseLeave, false)
      }
      this._menuMouseLeave = null
    }

    if (this._windowTouchStart) {
      if (layoutMenu) {
        window.addEventListener('touchstart', this._windowTouchStart, true)
      }
      this._windowTouchStart = null
    }

    this._setMenuHoverState(false)
  },

  // *******************************************************************************
  // * Methods

  scrollToActive(animate = false) {
    this._scrollToActive(animate)
  },

  swipeIn(el, callback) {
    this._swipeIn(el, callback)
  },

  swipeOut(el, callback) {
    this._swipeOut(el, callback)
  },

  // ---
  // Collapse / expand layout
  setCollapsed(collapsed = requiredParam('collapsed'), animate = true) {
    const layoutMenu = this.getLayoutMenu()

    if (!layoutMenu) return

    this._unbindLayoutAnimationEndEvent()

    if (animate && this._supportsTransitionEnd()) {
      this._addClass('layout-transitioning')
      if (collapsed) this._setMenuHoverState(false)

      this._bindLayoutAnimationEndEvent(
        () => {
          // Collapse / Expand
          this._setCollapsed(collapsed)
        },
        () => {
          this._removeClass('layout-transitioning')
          this._triggerWindowEvent('resize')
          this._triggerEvent('toggle')
          this._setMenuHoverState(false)
        }
      )
    } else {
      this._addClass('layout-no-transition')
      if (collapsed) this._setMenuHoverState(false)

      // Collapse / Expand
      this._setCollapsed(collapsed)

      setTimeout(() => {
        this._removeClass('layout-no-transition')
        this._triggerWindowEvent('resize')
        this._triggerEvent('toggle')
        this._setMenuHoverState(false)
      }, 1)
    }
  },

  // ---
  // Toggle layout
  toggleCollapsed(animate = true) {
    this.setCollapsed(!this.isCollapsed(), animate)
  },

  // ---
  // Set layout positioning
  setPosition(fixed = requiredParam('fixed'), offcanvas = requiredParam('offcanvas')) {
    this._removeClass('layout-menu-offcanvas layout-menu-fixed layout-menu-fixed-offcanvas')

    if (!fixed && offcanvas) {
      this._addClass('layout-menu-offcanvas')
    } else if (fixed && !offcanvas) {
      this._addClass('layout-menu-fixed')
      this._redrawLayoutMenu()
    } else if (fixed && offcanvas) {
      this._addClass('layout-menu-fixed-offcanvas')
      this._redrawLayoutMenu()
    }

    this.update()
  },

  // Update light/dark image based on current style
  switchImage(style) {
    // Handle 'system' style by checking user's preferred color scheme
    if (style === 'system') {
      style = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
    }

    // Get all images that need to be switched
    const switchImagesList = Array.from(document.querySelectorAll(`[data-app-${style}-img]`))

    // Loop through the images and update their `src` attribute
    switchImagesList.forEach(imageEl => {
      const setImage = imageEl.getAttribute(`data-app-${style}-img`)
      if (setImage) {
        const imagePath = `${assetsPath}img/${setImage}` // Using window.assetsPath for relative path

        // Preload the image to prevent flickering
        const img = new Image()
        img.src = imagePath

        // Once preloaded, set the image and make it visible
        img.onload = () => {
          imageEl.src = img.src
          imageEl.style.visibility = 'visible' // Make the image visible
        }

        // Hide the image during the switch to prevent flickering
        imageEl.style.visibility = 'hidden'
      }
    })
  },

  // *******************************************************************************
  // * Getters

  getLayoutMenu() {
    return document.querySelector('.layout-menu')
  },

  getMenu() {
    const layoutMenu = this.getLayoutMenu()

    if (!layoutMenu) return null

    return !this._hasClass('menu', layoutMenu) ? layoutMenu.querySelector('.menu') : layoutMenu
  },

  getLayoutNavbar() {
    return document.querySelector('.layout-navbar')
  },

  getLayoutFooter() {
    return document.querySelector('.content-footer')
  },

  getLayoutContainer() {
    return document.querySelector('.layout-page')
  },

  // *******************************************************************************
  // * Setters

  setNavbarFixed(fixed = requiredParam('fixed')) {
    this[fixed ? '_addClass' : '_removeClass']('layout-navbar-fixed')
    this.update()
  },

  setNavbar(type) {
    if (type === 'sticky') {
      this._addClass('layout-navbar-fixed')
      this._removeClass('layout-navbar-hidden')
    } else if (type === 'hidden') {
      this._addClass('layout-navbar-hidden')
      this._removeClass('layout-navbar-fixed')
    } else {
      this._removeClass('layout-navbar-hidden')
      this._removeClass('layout-navbar-fixed')
    }
    this.update()
  },

  setFooterFixed(fixed = requiredParam('fixed')) {
    this[fixed ? '_addClass' : '_removeClass']('layout-footer-fixed')
    this.update()
  },

  // Add to Helpers object in helpers.js

  setColor(color, defaultColor) {
    if (!color) return

    // Get current primary color from styles
    const currentStyle = getComputedStyle(document.documentElement).getPropertyValue('--bs-primary').trim()

    // Only proceed if the color is different from current or default color is true
    if (color === currentStyle && !defaultColor) return

    const r = parseInt(color.slice(1, 3), 16)
    const g = parseInt(color.slice(3, 5), 16)
    const b = parseInt(color.slice(5, 7), 16)

    let styleSheet = document.getElementById('custom-css')

    if (!styleSheet) {
      styleSheet = document.createElement('style')
      styleSheet.id = 'custom-css'
      document.head.appendChild(styleSheet)
    }

    function calculateRatio(percentage) {
      const numericValue = parseFloat(percentage)
      const result = (100 - numericValue) / 100
      return result
    }

    const yiq = (r * 299 + g * 587 + b * 114) / 1000
    const ratio = getComputedStyle(document.documentElement).getPropertyValue('--bs-min-contrast-ratio').trim() * 100
    const subtleRatio = getComputedStyle(document.documentElement)
      .getPropertyValue('--bs-bg-label-tint-amount')
      .trim('%')
    const borderSubtleRatio = getComputedStyle(document.documentElement)
      .getPropertyValue('--bs-border-subtle-amount')
      .trim()

    // Calculate contrast color based on YIQ and ratio
    const contrastColor = yiq >= ratio ? '#000' : '#fff' // window.config.colors.black : window.config.colors.white

    // Set CSS custom properties
    styleSheet.innerHTML = `:root, [data-bs-theme=light], [data-bs-theme=dark] {
    --bs-primary: ${color};
    --bs-primary-rgb: ${r}, ${g}, ${b};
    --bs-primary-bg-subtle: color-mix(in sRGB, ${window.config.colors.cardColor} ${subtleRatio}, ${color});
    --bs-primary-border-subtle: rgba(${r}, ${g}, ${b}, ${calculateRatio(borderSubtleRatio)});
    --bs-primary-contrast: ${contrastColor}
  }`

    // Store in cookie for persistence (handled by template-customizer now)
    const layoutTemplate = document.documentElement.getAttribute('data-template') || ''
    const isAdmin = !layoutTemplate.includes('front')
    const cookieName = isAdmin ? 'admin-primaryColor' : 'front-primaryColor'

    // Only set cookie here if not called from template-customizer
    if (typeof this._setCookie === 'function' && defaultColor) {
      this._setCookie(cookieName, color, 365)
    }
  },

  applySkin(skin) {
    if (!skin) return

    let skinName = skin

    // If template customizer is available, process skin name/id
    if (window.TemplateCustomizer && window.TemplateCustomizer.SKINS) {
      const availableSkins = window.TemplateCustomizer.SKINS

      // If skin is numeric, find the corresponding skin object
      if (!isNaN(parseInt(skin))) {
        const skinId = parseInt(skin)
        const skinObj = availableSkins.find(s => s.id === skinId)
        if (skinObj) {
          skinName = skinObj.name
        }
      }
      // If not numeric, check if it's a valid skin name
      else if (typeof skin === 'string') {
        const skinObj = availableSkins.find(s => s.name === skin)
        if (!skinObj) {
          // If not a valid skin name, try to use default
          skinName = 'default'
        }
      }
    }

    // Set data attribute for easier targeting in CSS - this is all we need now
    document.documentElement.setAttribute('data-skin', skinName || 'default')

    // Only set cookie for admin layouts
    const layoutName = document.documentElement.getAttribute('data-template') || ''
    const isAdmin = !layoutName.includes('front')

    if (isAdmin) {
      // Set cookie for 1 year
      if (typeof this._setCookie === 'function') {
        this._setCookie('customize_skin', skinName, 365)
      } else {
        // Fallback cookie setting
        const expirationDate = new Date()
        expirationDate.setTime(expirationDate.getTime() + 365 * 24 * 60 * 60 * 1000)
        document.cookie = `customize_skin=${skinName}; expires=${expirationDate.toUTCString()}; path=/`
      }
    }
  },

  setContentLayout(contentLayout = requiredParam('contentLayout')) {
    setTimeout(() => {
      const contentArea = document.querySelector('.content-wrapper > div') // For content area
      let navbarArea
      if (document.querySelector('.layout-wrapper.layout-navbar-full')) {
        navbarArea = document.querySelector('.layout-navbar-full .layout-navbar > div') // For horizontal navbar area
      } else {
        navbarArea = document.querySelector('.layout-content-navbar .layout-navbar') // For vertical navbar area
      }
      const footerArea = document.querySelector('.content-footer > div') // For footer area
      const containerFluid = [].slice.call(document.querySelectorAll('.container-fluid')) // To get container-fluid
      const containerXxl = [].slice.call(document.querySelectorAll('.container-xxl')) // To get container-xxl
      let horizontalMenu = false // For horizontal menu
      let horizontalMenuArea // For horizontal menu area
      // Condition to check if layout is horizontal menu
      if (document.querySelector('.content-wrapper > .menu-horizontal > div')) {
        horizontalMenu = true
        horizontalMenuArea = document.querySelector('.content-wrapper > .menu-horizontal > div')
      }
      //  If compact mode layout
      if (contentLayout === 'compact') {
        // Remove container fluid class from content area, navbar area and footer area
        if (containerFluid.some(el => [contentArea, navbarArea, footerArea].includes(el))) {
          this._removeClass('container-fluid', [contentArea, navbarArea, footerArea])
          this._addClass('container-xxl', [contentArea, navbarArea, footerArea])
        }
        // For horizontal menu only
        if (horizontalMenu) {
          this._removeClass('container-fluid', horizontalMenuArea)
          this._addClass('container-xxl', horizontalMenuArea)
        }
      } else {
        //  If wide mode layout

        // Remove container xxl class from content area, navbar area and footer area
        if (containerXxl.some(el => [contentArea, navbarArea, footerArea].includes(el))) {
          this._removeClass('container-xxl', [contentArea, navbarArea, footerArea])
          this._addClass('container-fluid', [contentArea, navbarArea, footerArea])
        }
        // For horizontal menu only
        if (horizontalMenu) {
          this._removeClass('container-xxl', horizontalMenuArea)
          this._addClass('container-fluid', horizontalMenuArea)
        }
      }
    }, 100)
  },

  // *******************************************************************************
  // * Update

  update() {
    if (
      (this.getLayoutNavbar() &&
        ((!this.isSmallScreen() && this.isLayoutNavbarFull() && this.isFixed()) || this.isNavbarFixed())) ||
      (this.getLayoutFooter() && this.isFooterFixed())
    ) {
      this._updateInlineStyle(this._getNavbarHeight(), this._getFooterHeight())
    }

    this._bindMenuMouseEvents()
  },

  setAutoUpdate(enable = requiredParam('enable')) {
    if (enable && !this._autoUpdate) {
      this.on('resize.Helpers:autoUpdate', () => this.update())
      this._autoUpdate = true
    } else if (!enable && this._autoUpdate) {
      this.off('resize.Helpers:autoUpdate')
      this._autoUpdate = false
    }
  },

  // Update custom option based on element
  updateCustomOptionCheck(el) {
    if (el.checked) {
      // If custom option element is radio, remove checked from the siblings (closest `.row`)
      if (el.type === 'radio') {
        const customRadioOptionList = [].slice.call(el.closest('.row').querySelectorAll('.custom-option'))
        customRadioOptionList.map(function (customRadioOptionEL) {
          customRadioOptionEL.closest('.custom-option').classList.remove('checked')
        })
      }
      el.closest('.custom-option').classList.add('checked')
    } else {
      el.closest('.custom-option').classList.remove('checked')
    }
  },

  // *******************************************************************************
  // * Tests

  isRtl() {
    return (
      document.querySelector('body').getAttribute('dir') === 'rtl' ||
      document.querySelector('html').getAttribute('dir') === 'rtl'
    )
  },

  isMobileDevice() {
    return typeof window.orientation !== 'undefined' || navigator.userAgent.indexOf('IEMobile') !== -1
  },

  isSmallScreen() {
    return (
      (window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth) < this.LAYOUT_BREAKPOINT
    )
  },

  isLayoutNavbarFull() {
    return !!document.querySelector('.layout-wrapper.layout-navbar-full')
  },

  isCollapsed() {
    if (this.isSmallScreen()) {
      return !this._hasClass('layout-menu-expanded')
    }
    return this._hasClass('layout-menu-collapsed')
  },

  isFixed() {
    return this._hasClass('layout-menu-fixed layout-menu-fixed-offcanvas')
  },

  isOffcanvas() {
    return this._hasClass('layout-menu-offcanvas layout-menu-fixed-offcanvas')
  },

  isNavbarFixed() {
    return (
      this._hasClass('layout-navbar-fixed') || (!this.isSmallScreen() && this.isFixed() && this.isLayoutNavbarFull())
    )
  },

  isFooterFixed() {
    return this._hasClass('layout-footer-fixed')
  },

  isLightStyle() {
    return document.documentElement.getAttribute('data-bs-theme') === 'light'
  },

  isDarkStyle() {
    return document.documentElement.getAttribute('data-bs-theme') === 'dark'
  },

  // *******************************************************************************
  // * Events

  on(event = requiredParam('event'), callback = requiredParam('callback')) {
    const [_event] = event.split('.')
    let [, ...namespace] = event.split('.')
    namespace = namespace.join('.') || null

    this._listeners.push({ event: _event, namespace, callback })
  },

  off(event = requiredParam('event')) {
    const [_event] = event.split('.')
    let [, ...namespace] = event.split('.')
    namespace = namespace.join('.') || null

    this._listeners
      .filter(listener => listener.event === _event && listener.namespace === namespace)
      .forEach(listener => this._listeners.splice(this._listeners.indexOf(listener), 1))
  },

  // *******************************************************************************
  // * Dark / Light / Auto Mode

  getStoredTheme: themeName => {
    if (window.templateCustomizer) {
      themeName = window.templateCustomizer._getSetting('Theme')
    } else {
      themeName = document.getElementsByTagName('HTML')[0].getAttribute('data-bs-theme')
    }
    return (
      themeName ||
      (window.templateCustomizer.settings.defaultTheme ? window.templateCustomizer.settings.defaultTheme : 'light')
    )
  },

  setStoredTheme: (templateName, theme) => {
    localStorage.setItem(`templateCustomizer-${templateName}--Theme`, theme)
  },

  getPreferredTheme: themeName => {
    const storedTheme = Helpers.getStoredTheme(themeName)
    if (storedTheme) {
      return storedTheme
    }
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
  },

  setTheme: theme => {
    if (theme === 'system') {
      document.documentElement.setAttribute(
        'data-bs-theme',
        window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
      )
    } else {
      document.documentElement.setAttribute('data-bs-theme', theme)
    }

    // Set cookies for server-side theme detection
    const isAdmin = !window.location.pathname.includes('/front-pages/')
    const modeCookieName = isAdmin ? 'admin-mode' : 'front-mode'
    const colorPrefCookieName = isAdmin ? 'admin-colorPref' : 'front-colorPref'

    // Set cookie function
    const setCookie = (name, value, days = 365) => {
      const d = new Date()
      d.setTime(d.getTime() + days * 24 * 60 * 60 * 1000)
      const expires = 'expires=' + d.toUTCString()
      document.cookie = name + '=' + value + ';' + expires + ';path=/'
    }

    // Set the theme cookie
    setCookie(modeCookieName, theme)

    // If theme is system, also set the preferred color based on system preference
    if (theme === 'system') {
      const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches
      const colorPref = prefersDark ? 'dark' : 'light'
      setCookie(colorPrefCookieName, colorPref)
    }

    // if (window.templateCustomizer && theme !== 'light') {
    //   window.templateCustomizer._showResetBtnNotification(true)
    // }
  },

  showActiveTheme: (theme, focus = false) => {
    const themeSwitcher = document.querySelector('#nav-theme')

    if (!themeSwitcher) {
      return
    }

    const themeSwitcherText = document.querySelector('#nav-theme-text')
    const activeThemeIcon = document.querySelector('.theme-icon-active')
    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
    const svgOfActiveBtn = btnToActive.querySelector('i').getAttribute('data-icon')
    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
      element.classList.remove('active')
      element.setAttribute('aria-pressed', 'false')
    })
    btnToActive.classList.add('active')
    btnToActive.setAttribute('aria-pressed', 'true')

    const classList = Array.from(activeThemeIcon.classList)
    const filteredClassList = classList.filter(className => !className.startsWith('tabler-'))
    activeThemeIcon.setAttribute('class', `tabler-${svgOfActiveBtn} ${filteredClassList.join(' ')}`)
    const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
    themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

    if (focus) {
      themeSwitcher.focus()
    }
  },

  syncThemeToggles: e => {
    document.querySelectorAll('[data-bs-theme-value]').forEach(toggle => {
      if (toggle.getAttribute('data-bs-theme-value') === e) {
        toggle.click()
      }
    })
  },

  syncCustomOptions: e => {
    const currEl = document.querySelector(`.template-customizer-themes-options input[value="${e}"]`)
    if (currEl) {
      currEl.checked = true
      window.Helpers.updateCustomOptionCheck(currEl)
    }
  },

  // *******************************************************************************
  // * LTR / RTL

  syncCustomOptionsRtl: e => {
    const currRtlEl = document.querySelector(`.template-customizer-directions-options input[value="${e}"]`)
    if (currRtlEl) {
      currRtlEl.checked = true
      window.Helpers.updateCustomOptionCheck(currRtlEl)
    }
  },

  // *******************************************************************************
  // * Life cycle

  init() {
    if (this._initialized) return
    this._initialized = true

    // Initialize `style` element
    this._updateInlineStyle(0)

    // Bind window resize event
    this._bindWindowResizeEvent()

    // Bind init event
    this.off('init._Helpers')
    this.on('init._Helpers', () => {
      this.off('resize._Helpers:redrawMenu')
      this.on('resize._Helpers:redrawMenu', () => {
        // eslint-disable-next-line no-unused-expressions
        this.isSmallScreen() && !this.isCollapsed() && this._redrawLayoutMenu()
      })

      // Force repaint in IE 10
      if (typeof document.documentMode === 'number' && document.documentMode < 11) {
        this.off('resize._Helpers:ie10RepaintBody')
        this.on('resize._Helpers:ie10RepaintBody', () => {
          if (this.isFixed()) return
          const { scrollTop } = document.documentElement
          document.body.style.display = 'none'
          document.body.style.display = 'block'
          document.documentElement.scrollTop = scrollTop
        })
      }
    })

    this._triggerEvent('init')
  },

  destroy() {
    if (!this._initialized) return
    this._initialized = false

    this._removeClass('layout-transitioning')
    this._removeInlineStyle()
    this._unbindLayoutAnimationEndEvent()
    this._unbindWindowResizeEvent()
    this._unbindMenuMouseEvents()
    this.setAutoUpdate(false)

    this.off('init._Helpers')

    // Remove all listeners except `init`
    this._listeners
      .filter(listener => listener.event !== 'init')
      .forEach(listener => this._listeners.splice(this._listeners.indexOf(listener), 1))
  },

  // ---
  // Init Password Toggle
  initPasswordToggle() {
    const toggler = document.querySelectorAll('.form-password-toggle i')
    if (typeof toggler !== 'undefined' && toggler !== null) {
      toggler.forEach(el => {
        el.addEventListener('click', e => {
          e.preventDefault()
          const formPasswordToggle = el.closest('.form-password-toggle')
          const formPasswordToggleIcon = formPasswordToggle.querySelector('i')
          const formPasswordToggleInput = formPasswordToggle.querySelector('input')

          if (formPasswordToggleInput.getAttribute('type') === 'text') {
            formPasswordToggleInput.setAttribute('type', 'password')
            formPasswordToggleIcon.classList.replace('tabler-eye', 'tabler-eye-off')
          } else if (formPasswordToggleInput.getAttribute('type') === 'password') {
            formPasswordToggleInput.setAttribute('type', 'text')
            formPasswordToggleIcon.classList.replace('tabler-eye-off', 'tabler-eye')
          }
        })
      })
    }
  },

  //--
  // Init custom option check
  initCustomOptionCheck() {
    const _this = this

    const custopOptionList = [].slice.call(document.querySelectorAll('.custom-option .form-check-input'))
    custopOptionList.map(function (customOptionEL) {
      // Update custom options check on page load
      _this.updateCustomOptionCheck(customOptionEL)

      // Update custom options check on click
      customOptionEL.addEventListener('click', e => {
        _this.updateCustomOptionCheck(customOptionEL)
      })
    })
  },

  // ---
  // Init Speech To Text
  initSpeechToText() {
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition
    const speechToText = document.querySelectorAll('.speech-to-text')
    if (SpeechRecognition !== undefined && SpeechRecognition !== null) {
      if (typeof speechToText !== 'undefined' && speechToText !== null) {
        const recognition = new SpeechRecognition()
        const toggler = document.querySelectorAll('.speech-to-text i')
        toggler.forEach(el => {
          let listening = false
          el.addEventListener('click', () => {
            el.closest('.input-group').querySelector('.form-control').focus()
            recognition.onspeechstart = () => {
              listening = true
            }
            if (listening === false) {
              recognition.start()
            }
            recognition.onerror = () => {
              listening = false
            }
            recognition.onresult = event => {
              el.closest('.input-group').querySelector('.form-control').value = event.results[0][0].transcript
            }
            recognition.onspeechend = () => {
              listening = false
              recognition.stop()
            }
          })
        })
      }
    }
  },

  // ---
  // Init Navbar Dropdown (i.e notification) PerfectScrollbar
  initNavbarDropdownScrollbar() {
    const scrollbarContainer = document.querySelectorAll('.navbar-dropdown .scrollable-container')
    const { PerfectScrollbar } = window

    if (PerfectScrollbar !== undefined) {
      if (typeof scrollbarContainer !== 'undefined' && scrollbarContainer !== null) {
        scrollbarContainer.forEach(el => {
          // eslint-disable-next-line no-new
          new PerfectScrollbar(el, {
            wheelPropagation: false,
            suppressScrollX: true
          })
        })
      }
    }
  },

  // Ajax Call Promise
  ajaxCall(url) {
    return new Promise((resolve, reject) => {
      const req = new XMLHttpRequest()
      req.open('GET', url)
      req.onload = () => (req.status === 200 ? resolve(req.response) : reject(Error(req.statusText)))
      req.onerror = e => reject(Error(`Network Error: ${e}`))
      req.send()
    })
  },

  // ---
  // SidebarToggle (Used in Apps)
  initSidebarToggle() {
    const sidebarToggler = document.querySelectorAll('[data-bs-toggle="sidebar"]')

    sidebarToggler.forEach(el => {
      el.addEventListener('click', () => {
        const target = el.getAttribute('data-target')
        const overlay = el.getAttribute('data-overlay')
        const appOverlay = document.querySelectorAll('.app-overlay')
        const targetEl = document.querySelectorAll(target)

        targetEl.forEach(tel => {
          tel.classList.toggle('show')
          if (
            typeof overlay !== 'undefined' &&
            overlay !== null &&
            overlay !== false &&
            typeof appOverlay !== 'undefined'
          ) {
            if (tel.classList.contains('show')) {
              appOverlay[0].classList.add('show')
            } else {
              appOverlay[0].classList.remove('show')
            }
            appOverlay[0].addEventListener('click', e => {
              e.currentTarget.classList.remove('show')
              tel.classList.remove('show')
            })
          }
        })
      })
    })
  },

  // get css variables for theme colors
  getCssVar(color, isChartJs = false) {
    if (isChartJs === true) {
      return getComputedStyle(document.documentElement).getPropertyValue(`--${window.Helpers.prefix}${color}`).trim()
    }
    return `var(--${window.Helpers.prefix}${color})`
  },

  // get maxlength count and display it for input and textarea
  maxLengthCount(inputElement, infoElement, maxLength) {
    const currentLength = inputElement.value.length
    const remaining = maxLength - currentLength

    infoElement.className = 'maxLength label-success'

    if (remaining >= 0) {
      infoElement.textContent = `You typed ${currentLength} out of ${maxLength} characters.`
    }
    if (remaining <= 0) {
      infoElement.textContent = `You typed ${currentLength} out of ${maxLength} characters.`
      infoElement.classList.remove('label-success')
      infoElement.classList.add('label-danger')
    }
  }
}

// *******************************************************************************
// * Initialization

if (typeof window !== 'undefined') {
  Helpers.init()

  if (Helpers.isMobileDevice() && window.chrome) {
    document.documentElement.classList.add('layout-menu-100vh')
  }

  // Update layout after page load
  if (document.readyState === 'complete') Helpers.update()
  else
    document.addEventListener('DOMContentLoaded', function onContentLoaded() {
      Helpers.update()
      document.removeEventListener('DOMContentLoaded', onContentLoaded)
    })
}

// ---
window.Helpers = Helpers
export { Helpers }

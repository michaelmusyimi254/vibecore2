@php
$configData = Helper::appClasses();
@endphp

<div class="smart-search-container position-relative">
  <!-- Search Form -->
  <div class="search-form-wrapper glassy-bar">
    <form class="smart-search-form d-flex flex-row align-items-center w-100 gap-3" action="{{ route('search.results') }}" method="GET" style="width:100%">
      <input 
        type="text" 
        name="query" 
        class="form-control search-input flex-grow-1"
        placeholder="Search trainers, facilities, products."
        autocomplete="off"
        id="smartSearchInput"
        style="min-width:220px; background:rgba(255,255,255,0.18); color:#fff; border:none; box-shadow:none;"
      />
      <input 
        type="text" 
        name="location" 
        class="form-control search-input flex-grow-1"
        placeholder="City / Postcode (optional)"
        autocomplete="off"
        style="min-width:180px; background:rgba(255,255,255,0.18); color:#fff; border:none; box-shadow:none;"
      />
      <button type="submit" class="btn search-btn" style="font-weight:700; font-size:1.1rem; padding:0.7rem 2.2rem; border-radius:2rem;">Search</button>
    </form>
  </div>

  <!-- Popular Tags (no heading) -->
  <div class="popular-searches mt-3">
    <div class="popular-tags d-flex flex-row flex-wrap justify-content-center gap-3" id="popularTagsContainer">
      <!-- Dynamic tags will be injected here -->
    </div>
  </div>
</div>

<style>
.smart-search-container {
  max-width: 900px;
  margin: 0 auto;
  position: relative;
  z-index: 10;
}

.glassy-bar {
  background: rgba(255,255,255,0.13);
  backdrop-filter: blur(16px);
  border-radius: 2.5rem;
  padding: 0.9rem 2.2rem;
  box-shadow: 0 2px 24px rgba(0,0,0,0.13);
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1.5px solid rgba(255,255,255,0.22);
}
.smart-search-form {
  width: 100%;
  gap: 1.1rem;
}
.search-input {
  background: rgba(255,255,255,0.18) !important;
  border: none !important;
  border-radius: 2rem !important;
  padding: 0.9rem 1.5rem !important;
  font-size: 1.15rem !important;
  color: #fff !important;
  min-width: 180px;
  height: 2.8rem !important;
  box-shadow: none !important;
  transition: all 0.2s;
}
.search-input::placeholder {
  color: #fff !important;
  opacity: 0.85;
}
.search-btn {
  background: #fff !important;
  color: #222 !important;
  border: none !important;
  border-radius: 2rem !important;
  padding: 0.9rem 2.2rem !important;
  font-weight: 700;
  font-size: 1.1rem;
  height: 2.8rem !important;
  box-shadow: 0 2px 8px rgba(0,0,0,0.07);
  transition: all 0.2s;
  letter-spacing: 0.01em;
}
.search-btn:hover {
  background: #f2f2f2 !important;
  color: #007bff !important;
  transform: translateY(-1px) scale(1.03);
}
.popular-searches {
  text-align: center;
  margin-top: 1.1rem;
}
.popular-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 1.1rem;
  justify-content: center;
}
.popular-tag {
  display: inline-block;
  background: rgba(255,255,255,0.18);
  color: #fff;
  padding: 0.6rem 2.1rem;
  border-radius: 2rem;
  font-size: 1.08rem;
  font-weight: 500;
  text-decoration: none;
  border: 1.5px solid rgba(255,255,255,0.22);
  transition: all 0.2s;
  box-shadow: 0 2px 8px rgba(0,0,0,0.10);
  backdrop-filter: blur(8px);
}
.popular-tag:hover {
  background: rgba(255,255,255,0.32);
  color: #fff;
  text-decoration: none;
  transform: translateY(-1px) scale(1.04);
}
@media (max-width: 900px) {
  .smart-search-container { max-width: 100%; }
  .glassy-bar { padding: 0.6rem 0.7rem; }
  .search-input, .search-btn { font-size: 1rem !important; height: 2.2rem !important; padding: 0.5rem 1rem !important; }
  .popular-tag { font-size: 0.98rem; padding: 0.5rem 1.2rem; }
}
@media (max-width: 600px) {
  .smart-search-form { flex-direction: column; gap: 0.5rem; }
  .glassy-bar { border-radius: 1.2rem; }
  .search-input, .search-btn { width: 100%; min-width: 0; }
  .popular-tag { width: 100%; min-width: 0; text-align: center; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('smartSearchInput');
  const suggestionsContainer = document.getElementById('searchSuggestions');
  
  // Sample suggestions data
  const suggestions = {
    trainers: [
      { name: 'John Smith - Personal Trainer', category: 'trainer', specialty: 'Fitness' },
      { name: 'Sarah Johnson - Yoga Instructor', category: 'trainer', specialty: 'Yoga' },
      { name: 'Mike Davis - Boxing Coach', category: 'trainer', specialty: 'Boxing' },
      { name: 'Lisa Chen - Swimming Coach', category: 'trainer', specialty: 'Swimming' }
    ],
    facilities: [
      { name: 'Fitness First Gym', category: 'facility', type: 'Gym' },
      { name: 'Yoga Studio Downtown', category: 'facility', type: 'Yoga Studio' },
      { name: 'Boxing Club Central', category: 'facility', type: 'Boxing Club' },
      { name: 'Swimming Pool Complex', category: 'facility', type: 'Swimming Pool' }
    ],
    events: [
      { name: 'Weekend Bootcamp', category: 'event', type: 'Bootcamp' },
      { name: 'Yoga Workshop', category: 'event', type: 'Workshop' },
      { name: 'Fitness Competition', category: 'event', type: 'Competition' },
      { name: 'Wellness Retreat', category: 'event', type: 'Retreat' }
    ]
  };
  
  searchInput.addEventListener('input', function() {
    const query = this.value.toLowerCase();
    
    if (query.length < 2) {
      suggestionsContainer.style.display = 'none';
      return;
    }
    
    const filteredSuggestions = [];
    
    // Search in all categories
    Object.values(suggestions).flat().forEach(item => {
      if (item.name.toLowerCase().includes(query)) {
        filteredSuggestions.push(item);
      }
    });
    
    if (filteredSuggestions.length > 0) {
      displaySuggestions(filteredSuggestions);
    } else {
      suggestionsContainer.style.display = 'none';
    }
  });
  
  function displaySuggestions(suggestions) {
    suggestionsContainer.innerHTML = '';
    
    suggestions.slice(0, 8).forEach(item => {
      const suggestionItem = document.createElement('div');
      suggestionItem.className = 'suggestion-item';
      suggestionItem.innerHTML = `
        <div class="d-flex align-items-center">
          <i class="icon-base ti ${getIconForCategory(item.category)} me-2 text-primary"></i>
          <div>
            <div class="fw-medium">${item.name}</div>
            <small class="text-muted">${item.specialty || item.type}</small>
          </div>
        </div>
      `;
      
      suggestionItem.addEventListener('click', function() {
        searchInput.value = item.name;
        suggestionsContainer.style.display = 'none';
        // Submit the form
        searchInput.closest('form').submit();
      });
      
      suggestionsContainer.appendChild(suggestionItem);
    });
    
    suggestionsContainer.style.display = 'block';
  }
  
  function getIconForCategory(category) {
    const icons = {
      trainer: 'tabler-user',
      facility: 'tabler-building',
      event: 'tabler-calendar'
    };
    return icons[category] || 'tabler-search';
  }
  
  // --- Dynamic Popular Tags ---
  function fetchPopularTags(region = null) {
    let url = '/api/popular-tags';
    if (region) {
      url += '?region=' + encodeURIComponent(region);
    }
    fetch(url)
      .then(res => res.json())
      .then(data => {
        const tags = data.tags || [];
        const container = document.getElementById('popularTagsContainer');
        container.innerHTML = '';
        tags.forEach(tag => {
          const a = document.createElement('a');
          a.href = `{{ route('search.results') }}?category=${encodeURIComponent(tag.category)}&interest=${encodeURIComponent(tag.interest)}`;
          a.className = 'popular-tag';
          a.textContent = tag.label;
          container.appendChild(a);
        });
      });
  }

  // Try to get region from select input, cookie, or fallback
  let region = null;
  const locationSelect = document.querySelector('select[name="location"]');
  if (locationSelect && locationSelect.value && locationSelect.value !== '') {
    region = locationSelect.value;
  }
  // Optionally, add geolocation logic here if needed
  fetchPopularTags(region);

  // Optionally, re-fetch tags if location filter changes
  if (locationSelect) {
    locationSelect.addEventListener('change', function() {
      fetchPopularTags(this.value);
    });
  }

  // Hide suggestions when clicking outside
  document.addEventListener('click', function(e) {
    if (!searchInput.contains(e.target) && !suggestionsContainer.contains(e.target)) {
      suggestionsContainer.style.display = 'none';
    }
  });
});
</script> 
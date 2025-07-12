@php
$configData = Helper::appClasses();
@endphp

<div class="smart-search-container position-relative">
  <!-- Search Form -->
  <div class="search-form-wrapper">
    <form class="smart-search-form d-flex flex-wrap align-items-center gap-2" action="{{ route('search.results') }}" method="GET" style="width:100%">
      <div class="search-input-wrapper flex-grow-1 position-relative">
        <i class="icon-base ti tabler-search search-icon"></i>
        <input 
          type="text" 
          name="query" 
          class="form-control search-input"
          placeholder="Search for trainers, facilities, or events..."
          autocomplete="off"
          id="smartSearchInput"
        />
        <div class="search-suggestions" id="searchSuggestions"></div>
      </div>
      <select name="category" class="form-select search-filter">
        <option value="">All Categories</option>
        <option value="trainer">Trainers</option>
        <option value="facility">Facilities</option>
        <option value="event">Events</option>
      </select>
      <select name="location" class="form-select search-filter">
        <option value="">Any Location</option>
        <option value="nearby">Nearby</option>
        <option value="city">Same City</option>
        <option value="region">Same Region</option>
      </select>
      <button type="submit" class="btn search-btn d-flex align-items-center justify-content-center">
        <i class="icon-base ti tabler-search me-2"></i>
        <span>Search</span>
      </button>
    </form>
  </div>

  <!-- Popular Searches -->
  <div class="popular-searches mt-3">
    <div class="popular-tags d-flex flex-wrap justify-content-center gap-2">
      <a href="{{ route('search.results', ['category' => 'trainer', 'interest' => 'fitness']) }}" class="popular-tag">Fitness Trainers</a>
      <a href="{{ route('search.results', ['category' => 'facility', 'interest' => 'gym']) }}" class="popular-tag">Gyms</a>
      <a href="{{ route('search.results', ['category' => 'trainer', 'interest' => 'yoga']) }}" class="popular-tag">Yoga Classes</a>
      <a href="{{ route('search.results', ['category' => 'event', 'interest' => 'bootcamp']) }}" class="popular-tag">Bootcamps</a>
      <a href="{{ route('search.results', ['category' => 'facility', 'interest' => 'swimming']) }}" class="popular-tag">Swimming Pools</a>
      <a href="{{ route('search.results', ['category' => 'trainer', 'interest' => 'boxing']) }}" class="popular-tag">Boxing Coaches</a>
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

.search-form-wrapper {
  background: rgba(255,255,255,0.10);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255,255,255,0.18);
  border-radius: 2.5rem;
  padding: 1.1rem 1.5rem;
  box-shadow: 0 4px 24px rgba(0,0,0,0.08);
  display: flex;
  align-items: center;
  justify-content: center;
}
[data-bs-theme="dark"] .search-form-wrapper {
  background: rgba(0,0,0,0.18);
  border: 1px solid rgba(255,255,255,0.10);
}

.smart-search-form {
  width: 100%;
  gap: 0.7rem;
}

.search-input-wrapper {
  position: relative;
  flex: 2 1 250px;
  min-width: 180px;
}

.search-input {
  background: rgba(255,255,255,0.95);
  border: none;
  border-radius: 2rem;
  padding: 0.85rem 1.1rem 0.85rem 2.7rem;
  font-size: 1.08rem;
  color: #444;
  transition: all 0.2s;
  box-shadow: none;
  min-width: 180px;
  height: 2.8rem;
}
[data-bs-theme="dark"] .search-input {
  background: rgba(0,0,0,0.35);
  color: #fff;
  border: 1px solid rgba(255,255,255,0.10);
}
.search-input:focus {
  background: rgba(255,255,255,1);
  outline: none;
}
[data-bs-theme="dark"] .search-input:focus {
  background: rgba(0,0,0,0.45);
}

.search-icon {
  position: absolute;
  left: 1.1rem;
  top: 50%;
  transform: translateY(-50%);
  color: #007bff;
  font-size: 1.25rem;
  z-index: 2;
}
[data-bs-theme="dark"] .search-icon {
  color: #fff;
}

.search-filter {
  background: rgba(255,255,255,0.95);
  border: none;
  border-radius: 2rem;
  padding: 0.85rem 1.2rem;
  font-size: 1.02rem;
  color: #444;
  min-width: 150px;
  height: 2.8rem;
  font-weight: 500;
  box-shadow: none;
  transition: all 0.2s;
}
[data-bs-theme="dark"] .search-filter {
  background: rgba(0,0,0,0.35);
  color: #fff;
  border: 1px solid rgba(255,255,255,0.10);
}
.search-filter:focus {
  background: rgba(255,255,255,1);
  outline: none;
}
[data-bs-theme="dark"] .search-filter:focus {
  background: rgba(0,0,0,0.45);
}

.search-btn {
  background: linear-gradient(135deg, #007bff, #0056b3);
  border: none;
  border-radius: 2rem;
  padding: 0.85rem 2.2rem;
  font-weight: 600;
  font-size: 1.08rem;
  color: #fff;
  height: 2.8rem;
  box-shadow: 0 2px 8px rgba(0,123,255,0.10);
  transition: all 0.2s;
  display: flex;
  align-items: center;
  justify-content: center;
}
.search-btn:hover {
  background: linear-gradient(135deg, #0056b3, #007bff);
  color: #fff;
  transform: translateY(-1px) scale(1.03);
  box-shadow: 0 4px 16px rgba(0,123,255,0.18);
}

.popular-searches {
  text-align: center;
  margin-top: 1.2rem;
}

.popular-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
  justify-content: center;
}

.popular-tag {
  display: inline-block;
  background: rgba(255,255,255,0.18);
  color: #333;
  padding: 0.5rem 1.3rem;
  border-radius: 2rem;
  font-size: 0.98rem;
  font-weight: 500;
  text-decoration: none;
  border: 1px solid rgba(255,255,255,0.18);
  transition: all 0.2s;
  box-shadow: 0 2px 8px rgba(0,0,0,0.06);
}
[data-bs-theme="dark"] .popular-tag {
  background: rgba(0,0,0,0.28);
  color: #fff;
  border: 1px solid rgba(255,255,255,0.10);
}
.popular-tag:hover {
  background: rgba(0,123,255,0.12);
  color: #007bff;
  text-decoration: none;
  transform: translateY(-1px) scale(1.04);
}
[data-bs-theme="dark"] .popular-tag:hover {
  background: rgba(0,123,255,0.18);
  color: #fff;
}

.search-suggestions {
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  background: rgba(255, 255, 255, 0.95);
  border-radius: 10px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  display: none;
  max-height: 300px;
  overflow-y: auto;
}

[data-bs-theme="dark"] .search-suggestions {
  background: rgba(0, 0, 0, 0.9);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

.suggestion-item {
  padding: 0.75rem 1rem;
  cursor: pointer;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  transition: background-color 0.2s ease;
}

[data-bs-theme="dark"] .suggestion-item {
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.suggestion-item:hover {
  background: rgba(0, 123, 255, 0.1);
}

[data-bs-theme="dark"] .suggestion-item:hover {
  background: rgba(255, 255, 255, 0.1);
}

.suggestion-item:last-child {
  border-bottom: none;
}

@media (max-width: 900px) {
  .smart-search-container { max-width: 100%; }
  .search-form-wrapper { padding: 0.7rem 0.5rem; }
  .search-input, .search-filter, .search-btn { font-size: 0.98rem; height: 2.3rem; padding: 0.5rem 1rem; }
}
@media (max-width: 600px) {
  .smart-search-form { flex-direction: column; gap: 0.5rem; }
  .search-form-wrapper { border-radius: 1.2rem; }
  .search-input, .search-filter, .search-btn { width: 100%; min-width: 0; }
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
  
  // Hide suggestions when clicking outside
  document.addEventListener('click', function(e) {
    if (!searchInput.contains(e.target) && !suggestionsContainer.contains(e.target)) {
      suggestionsContainer.style.display = 'none';
    }
  });
});
</script> 
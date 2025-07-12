@php
$configData = Helper::appClasses();
@endphp

<div class="smart-search-container position-relative">
  <!-- Search Form -->
  <div class="search-form-wrapper">
    <form class="smart-search-form" action="{{ route('search.results') }}" method="GET">
      <div class="search-input-group">
        <div class="search-input-wrapper">
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
        
        <div class="search-filters">
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
          
          <button type="submit" class="btn btn-primary search-btn">
            <i class="icon-base ti tabler-search me-2"></i>
            Search
          </button>
        </div>
      </div>
    </form>
  </div>

  <!-- Popular Searches -->
  <div class="popular-searches mt-4">
    <p class="text-center mb-3">
      <span class="popular-label">Popular:</span>
    </p>
    <div class="popular-tags">
      <a href="{{ route('search.results', ['category' => 'trainer', 'interest' => 'fitness']) }}" class="popular-tag">
        <i class="icon-base ti tabler-dumbbell me-1"></i>Fitness Trainers
      </a>
      <a href="{{ route('search.results', ['category' => 'facility', 'interest' => 'gym']) }}" class="popular-tag">
        <i class="icon-base ti tabler-building me-1"></i>Gyms
      </a>
      <a href="{{ route('search.results', ['category' => 'trainer', 'interest' => 'yoga']) }}" class="popular-tag">
        <i class="icon-base ti tabler-yoga me-1"></i>Yoga Classes
      </a>
      <a href="{{ route('search.results', ['category' => 'event', 'interest' => 'bootcamp']) }}" class="popular-tag">
        <i class="icon-base ti tabler-calendar me-1"></i>Bootcamps
      </a>
      <a href="{{ route('search.results', ['category' => 'facility', 'interest' => 'swimming']) }}" class="popular-tag">
        <i class="icon-base ti tabler-swimming me-1"></i>Swimming Pools
      </a>
      <a href="{{ route('search.results', ['category' => 'trainer', 'interest' => 'boxing']) }}" class="popular-tag">
        <i class="icon-base ti tabler-fist me-1"></i>Boxing Coaches
      </a>
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
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(15px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 25px;
  padding: 2.5rem;
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
  margin-top: 2rem;
}

[data-bs-theme="dark"] .search-form-wrapper {
  background: rgba(0, 0, 0, 0.2);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

.search-input-group {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.search-input-wrapper {
  position: relative;
}

.search-input {
  background: rgba(255, 255, 255, 0.95);
  border: none;
  border-radius: 20px;
  padding: 1.25rem 1.25rem 1.25rem 3.5rem;
  font-size: 1.2rem;
  backdrop-filter: blur(10px);
  color: #333;
  transition: all 0.3s ease;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

[data-bs-theme="dark"] .search-input {
  background: rgba(0, 0, 0, 0.4);
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.search-input:focus {
  background: rgba(255, 255, 255, 0.95);
  box-shadow: 0 0 20px rgba(0, 123, 255, 0.3);
  transform: translateY(-2px);
}

[data-bs-theme="dark"] .search-input:focus {
  background: rgba(0, 0, 0, 0.4);
  border-color: rgba(255, 255, 255, 0.3);
}

.search-icon {
  position: absolute;
  left: 1.25rem;
  top: 50%;
  transform: translateY(-50%);
  color: #007bff;
  font-size: 1.4rem;
  z-index: 2;
}

[data-bs-theme="dark"] .search-icon {
  color: #fff;
}

.search-filters {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
}

.search-filter {
  background: rgba(255, 255, 255, 0.9);
  border: none;
  border-radius: 15px;
  padding: 1rem 1.25rem;
  backdrop-filter: blur(10px);
  color: #333;
  transition: all 0.3s ease;
  font-weight: 500;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

[data-bs-theme="dark"] .search-filter {
  background: rgba(0, 0, 0, 0.4);
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.search-filter:focus {
  background: rgba(255, 255, 255, 0.9);
  box-shadow: 0 0 15px rgba(0, 123, 255, 0.2);
}

[data-bs-theme="dark"] .search-filter:focus {
  background: rgba(0, 0, 0, 0.4);
  border-color: rgba(255, 255, 255, 0.3);
}

.search-btn {
  background: linear-gradient(135deg, #007bff, #0056b3);
  border: none;
  border-radius: 15px;
  padding: 1rem 2.5rem;
  font-weight: 600;
  font-size: 1.1rem;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
  box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
}

.search-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(0, 123, 255, 0.5);
  background: linear-gradient(135deg, #0056b3, #004085);
}

.popular-searches {
  text-align: center;
  margin-top: 2rem;
}

.popular-label {
  color: rgba(255, 255, 255, 0.9);
  font-weight: 600;
  font-size: 1rem;
  margin-bottom: 1rem;
  display: block;
}

[data-bs-theme="dark"] .popular-label {
  color: rgba(255, 255, 255, 0.8);
}

.popular-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
  justify-content: center;
}

.popular-tag {
  display: inline-flex;
  align-items: center;
  background: rgba(255, 255, 255, 0.15);
  color: rgba(255, 255, 255, 0.95);
  padding: 0.75rem 1.5rem;
  border-radius: 25px;
  text-decoration: none;
  font-size: 1rem;
  font-weight: 500;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  margin: 0.25rem;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

[data-bs-theme="dark"] .popular-tag {
  background: rgba(0, 0, 0, 0.3);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.popular-tag:hover {
  background: rgba(255, 255, 255, 0.25);
  color: #fff;
  transform: translateY(-2px);
  text-decoration: none;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

[data-bs-theme="dark"] .popular-tag:hover {
  background: rgba(255, 255, 255, 0.15);
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

@media (max-width: 768px) {
  .search-filters {
    flex-direction: column;
  }
  
  .search-filter {
    width: 100%;
  }
  
  .popular-tags {
    justify-content: flex-start;
  }
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
@php
$configData = Helper::appClasses();
@endphp

<div class="smart-search-container position-relative">
  <!-- Search Form -->
  <div class="search-form-wrapper">
    <form class="smart-search-form d-flex flex-wrap align-items-center gap-2" action="{{ route('search.results') }}" method="GET" style="width:100%">
      <input 
        type="text" 
        name="query" 
        class="form-control search-input flex-grow-1"
        placeholder="Search for trainers, facilities, or events..."
        autocomplete="off"
        id="smartSearchInput"
      />
      <select name="location" class="form-select search-filter">
        <option value="">Any Location</option>
        <option value="nearby">Nearby</option>
        <option value="city">Same City</option>
        <option value="region">Same Region</option>
      </select>
      <button type="submit" class="btn search-btn">Search</button>
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
      <a href="{{ route('search.results', ['category' => 'facility', 'interest' => 'golf park']) }}" class="popular-tag">Golf Parks</a>
      <a href="{{ route('search.results', ['category' => 'trainer', 'interest' => 'golf']) }}" class="popular-tag">Golf Trainers</a>
      <a href="{{ route('search.results', ['category' => 'trainer', 'interest' => 'boxing']) }}" class="popular-tag">Boxing Trainers</a>
      <a href="{{ route('search.results', ['category' => 'facility', 'interest' => 'tennis']) }}" class="popular-tag">Tennis Courts</a>
      <a href="{{ route('search.results', ['category' => 'facility', 'interest' => 'padel']) }}" class="popular-tag">Padel Courts</a>
      <a href="{{ route('search.results', ['category' => 'facility', 'interest' => 'floodlight']) }}" class="popular-tag">Floodlight Courts</a>
      <a href="{{ route('search.results', ['category' => 'trainer', 'interest' => 'nutrition']) }}" class="popular-tag">Nutritionists</a>
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
  background: rgba(255,255,255,0.13);
  backdrop-filter: blur(10px);
  border-radius: 2.5rem;
  padding: 0.7rem 1.2rem;
  box-shadow: 0 2px 16px rgba(0,0,0,0.07);
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid rgba(255,255,255,0.13);
}
[data-bs-theme="dark"] .search-form-wrapper {
  background: rgba(0,0,0,0.18);
  border: 1px solid rgba(255,255,255,0.10);
}

.smart-search-form {
  width: 100%;
  gap: 0.5rem;
}

.search-input {
  background: rgba(255,255,255,0.92);
  border: none;
  border-radius: 2rem;
  padding: 0.7rem 1.2rem;
  font-size: 1.05rem;
  color: #444;
  min-width: 180px;
  height: 2.5rem;
  box-shadow: none;
  transition: all 0.2s;
}
[data-bs-theme="dark"] .search-input {
  background: rgba(0,0,0,0.32);
  color: #fff;
}
.search-input:focus {
  background: rgba(255,255,255,1);
  outline: none;
}
[data-bs-theme="dark"] .search-input:focus {
  background: rgba(0,0,0,0.45);
}

.search-filter {
  background: rgba(255,255,255,0.92);
  border: none;
  border-radius: 2rem;
  padding: 0.7rem 1.2rem;
  font-size: 1.05rem;
  color: #444;
  min-width: 150px;
  height: 2.5rem;
  font-weight: 500;
  box-shadow: none;
  transition: all 0.2s;
}
[data-bs-theme="dark"] .search-filter {
  background: rgba(0,0,0,0.32);
  color: #fff;
}
.search-filter:focus {
  background: rgba(255,255,255,1);
  outline: none;
}
[data-bs-theme="dark"] .search-filter:focus {
  background: rgba(0,0,0,0.45);
}

.search-btn {
  background: #fff;
  color: #222;
  border: none;
  border-radius: 2rem;
  padding: 0.7rem 2.1rem;
  font-weight: 700;
  font-size: 1.08rem;
  height: 2.5rem;
  box-shadow: 0 2px 8px rgba(0,0,0,0.07);
  transition: all 0.2s;
  letter-spacing: 0.01em;
}
.search-btn:hover {
  background: #f2f2f2;
  color: #007bff;
  transform: translateY(-1px) scale(1.03);
}

.popular-searches {
  text-align: center;
  margin-top: 1.1rem;
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
  border: 1px solid rgba(255,255,255,0.13);
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

@media (max-width: 900px) {
  .smart-search-container { max-width: 100%; }
  .search-form-wrapper { padding: 0.5rem 0.3rem; }
  .search-input, .search-filter, .search-btn { font-size: 0.98rem; height: 2.1rem; padding: 0.4rem 0.8rem; }
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
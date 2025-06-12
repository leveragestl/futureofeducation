import { fancyBox } from "../vendors/fancyBox";

export function initPostFilters() {
	// Search Clear
	let searchContainer = document.querySelector('.alm-filter--search .alm-filter--text');
	let searchInput = searchContainer?.querySelector('input.alm-filter--textfield');
	let searchClearElem = document.createElement('div');
	searchClearElem.classList.add('clear-search', 'hidden');
	searchClearElem.innerHTML = '<i class="close !bg-white !w-4 !h-4"></i>';
	searchContainer?.appendChild(searchClearElem);

	if (searchInput) {
		searchInput.addEventListener('input', function (e) {
			if(searchInput.value) {
				searchClearElem.classList.remove('hidden');
				searchClearElem.classList.add('block');
			} else {
				searchClearElem.classList.remove('block');
				searchClearElem.classList.add('hidden');
			}
		});
	}

	if (searchClearElem) {
		searchClearElem.addEventListener('click', function(){
			searchInput.value = '';
			searchClearElem.classList.remove('block');
			searchClearElem.classList.add('hidden');
			setTimeout(() => {
				searchInput.focus();
			}, 1);
		});
	}

	// Reset Filters
	// let filterResets = document.querySelectorAll('.reset-filters');
	// for (const filterReset of filterResets) {
	// 	if(filterReset) {
	// 		filterReset.addEventListener('click', function(e){
	// 			almfilters.reset();
	// 			searchClearElem.classList.remove('block');
	// 			searchClearElem.classList.add('hidden');
	// 		});
	// 	}
	// }

	// Helper getClosest parent function 
	var getClosest = function (elem, selector) {
		for ( ; elem && elem !== document; elem = elem.parentNode ) {
			if ( elem.matches( selector ) ) return elem;
		}
		return null;
	};

	// JS Dropdowns
	let filterGroups = document.querySelectorAll('.alm-filter--group');
	let filterID;
	let otherGroups;

	// Function to update selected value display
	function updateSelectedValue(filterGroup) {
		const title = filterGroup?.querySelector('.alm-filter--title h3');
		if (!title) return;

		const selectedLink = filterGroup.querySelector('.alm-filter--link.active');
		const selectedValue = selectedLink ? selectedLink.textContent.trim() : '';
		
		// Create or update the selected value span
		let selectedSpan = filterGroup.querySelector('.selected-value');
		if (!selectedSpan) {
			selectedSpan = document.createElement('span');
			selectedSpan.classList.add('selected-value');
			title.appendChild(selectedSpan);
		}
		
		selectedSpan.textContent = selectedValue ? ` ${selectedValue}` : '';
	}

	// Initialize selected values
	filterGroups.forEach(group => {
		updateSelectedValue(group);
	});

	document.addEventListener('click', function(e){
		let self = e.target;
		let selfGroup = getClosest(self, '.alm-filter--group');

		if(selfGroup) {
			// Set up empty array for all non-selected filter groups
			otherGroups = [];

			// Get selected filter group ID
			filterID = selfGroup.id;
	
			// Add non-selected filter groups to array
			for (const filterGroup of filterGroups) {
				if (filterGroup.id !== filterID) {
					otherGroups.push(filterGroup);
				}
			}
			
			// Remove class 'open' from all non-selected filter groups
			for (const otherGroup of otherGroups) {
				otherGroup.classList.remove('open');
			}

			// If already open && we're clicking the title, close it; otherwise open
			// And for any other outside clicks, close everything
			if(selfGroup.classList.contains('open') && self.closest('.alm-filter--title')) {
				selfGroup.classList.remove('open');
			} else {
				selfGroup.classList.add('open');
			}

			// Update selected value when clicking a filter option
			if (self.classList.contains('alm-filter--link')) {
				updateSelectedValue(selfGroup);
			}
		} else {
			for (const filterGroup of filterGroups) {
				filterGroup.classList.remove('open');
			}
		}		
	});

  // Initialize fancyBox for dynamically loaded content
  window.almComplete = function(alm){
    if (document.querySelector('[data-fancybox]')) {
      setTimeout(() => {
        fancyBox()
      }, 500);
		}
  };
}
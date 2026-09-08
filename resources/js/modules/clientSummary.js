import { capitalize } from './utils.js';

// DOM Elements
const clientForm = document.getElementById('client-form');

// Form inputs
const companyNameValue = document.getElementById('company-name');

// Summary details
const companyNameEl = document.getElementById('company-name-detail');
const clientStatusEl = document.getElementById('client-status-detail');

// Create 'Pending' state
function setPending(parentEl, message = 'Pending') {
    const pendingSpan = document.createElement('span');
    pendingSpan.className = 'text-gray-400 animate-pulse';
    pendingSpan.textContent = message;
    parentEl.append(pendingSpan);
}

// Update company name
function updateCompanyName() {
    // Check if value is empty
    let companyName = companyNameValue.value;

    // If empty, set 'Pending' state
    if(!companyName) {
        setPending(companyNameEl);
        return;
    }

    // Update company name value
    companyNameEl.textContent = companyName;
}

function updateSummary() {
    // Update client name
    updateCompanyName();
}

// Change event listener
clientForm.addEventListener('input', updateSummary);
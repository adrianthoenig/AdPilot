import { capitalize } from './utils.js';

// DOM Elements
const clientForm = document.getElementById('client-form');

// Form inputs
const companyNameValue = document.getElementById('company-name');
const clientStatusValue = document.querySelectorAll('input[name="client_status"]');

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
    const companyName = companyNameValue.value;

    // If empty, set 'Pending' state
    if(!companyName) {
        companyNameEl.textContent = '';
        setPending(companyNameEl);
        return;
    }

    // Update company name value
    companyNameEl.textContent = companyName;
}

// Get checked client status
function getCheckedClientStatus() {
    const [ clientStatus ] = [...clientStatusValue]
        .filter(clientStatus => clientStatus.checked);
    
    // In case there's non selected yet
    if(!clientStatus) return;

    return clientStatus.value;
}

// Update client status
function updateClientStatus() {
    // Check if value is checked
    const clientStatus = getCheckedClientStatus();
    
    // If empty, set 'Pending' state
    if(!clientStatus) {
        clientStatusEl.textContent = '';
        setPending(clientStatusEl);
        return;
    }

    // Update client status value
    clientStatusEl.textContent = capitalize(clientStatus);
}

function updateSummary() {
    // Update client name
    updateCompanyName();

    // Update client status
    updateClientStatus();
}

// Change event listener
clientForm.addEventListener('input', updateSummary);
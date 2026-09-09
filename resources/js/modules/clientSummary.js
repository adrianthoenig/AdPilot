import { capitalize } from './utils.js';

// DOM Elements
const clientForm = document.getElementById('client-form');

// Company information
const nameInput = document.getElementById('company-name');
const industryInput = document.getElementById('industry');
const websiteInput = document.getElementById('website');
const countryInput = document.getElementById('country');
const cityInput = document.getElementById('city');
const logoInput = document.getElementById('logo');

// Primary contact
const contactNameInput = document.getElementById('contact_name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const jobTitleInput = document.getElementById('job_title');

// Client status
const clientStatusInput = Array.from(document.querySelectorAll('input[name="client_status"]'));

// Budget and schedule
const startDateInput = document.getElementById('start_date');
const currencyInput = document.getElementById('currency');
const monthlyBudgetInput = document.getElementById('monthly_budget');

// Advertising platforms
const platformsInput = Array.from(document.querySelectorAll('input[name="advertising_platforms"]'));

// Form inputs array
const formInputs = [
    nameInput,
    industryInput,
    websiteInput,
    countryInput,
    cityInput,
    logoInput,
    contactNameInput,
    emailInput,
    phoneInput,
    jobTitleInput,
    Array.from(clientStatusInput),
    startDateInput,
    currencyInput,
    monthlyBudgetInput,
    platformsInput
];

/**
 * Total fields: 15
 * Required fields: 4
 */

// Summary details
const companyNameEl = document.getElementById('company-name-detail');
const clientStatusEl = document.getElementById('client-status-detail');
const totalFieldsFill = document.getElementById('total-fields-fill');
const totalFieldsMax = document.getElementById('total-fields-max');
const requiredFieldsFill = document.getElementById('required-fields-fill');
const requiredFieldsMax = document.getElementById('required-fields-max');

function getFieldInputs(inputs) {
    return inputs.flat().filter(input => input.type !== 'radio');
}

function getRadioInputs(inputs) {
    return inputs.flat().filter(input => input.type === 'radio');
}

function getRadioGroupNames(inputs) {
    return [...new Set(inputs.map(radio => radio.name))];
}

function separateRadioGroups(radioInputs) {
    const radioGroups = [];

    // Separate by radio names
    const names = getRadioGroupNames(radioInputs);

    names.forEach((radioName, index) => {
        radioGroups[index] = radioInputs.filter(radio => radio.name === radioName);
    })

    return radioGroups;
}

// Get total fields
function countTotalFields(inputs) {
    // Count total fields (except radios)
    const totalFieldInputs = getFieldInputs(inputs).length;
    
    // Count radio groups
    const radioInputs = getRadioInputs(inputs);
    const totalRadioGroups = separateRadioGroups(radioInputs).length;

    return totalFieldInputs + totalRadioGroups;
}

// Count required fields
function countRequiredFields(inputs) {
    // Count total required fields (except radios)
    const requiredInputs = getFieldInputs(inputs)
        .filter(input => input.hasAttribute('required')).length;

    // Count total required radio groups
    const requiredRadios = getRadioInputs(inputs).filter(radio => radio.hasAttribute('required'));
    const requiredRadioGroups = separateRadioGroups(requiredRadios).length;

    return requiredInputs + requiredRadioGroups;
}

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
    const companyName = nameInput.value;

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
    const [ clientStatus ] = [...clientStatusInput]
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

function initSummary() {
    // Set total fields MAX
    totalFieldsMax.textContent = countTotalFields(formInputs);

    // Set total REQUIRED fields
    requiredFieldsMax.textContent = countRequiredFields(formInputs);
}

// ### DO NOT REMOVE ###
initSummary();

// Change event listener
clientForm.addEventListener('input', updateSummary);
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
 * Required fields: 5
 */

// Summary details
const companyNameEl = document.getElementById('company-name-detail');
const clientStatusEl = document.getElementById('client-status-detail');
const totalFieldsFill = document.getElementById('total-fields-fill');
const totalFieldsMax = document.getElementById('total-fields-max');
const requiredFieldsFill = document.getElementById('required-fields-fill');
const requiredFieldsMax = document.getElementById('required-fields-max');

const formStatus = document.getElementById('form-status');

const submitBtn = document.getElementById('submit-client-btn');

// Global constants
const STATUS_CHIP_READY_TITLE = 'Ready';
const STATUS_CHIP_NOT_READY_TTILE = 'Not Ready';

function getFieldInputs(inputs) {
    return inputs.flat().filter(input => input.type !== 'radio');
}

function getTextInputs(inputs) {
    return inputs.filter(input => input.type !== 'select-one' && input.type !== 'radio' && !Array.isArray(input));
}

function getSelectInputs(inputs) {
    return inputs.filter(input => input.type === 'select-one');
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

function countTotalFilled(inputs) {
    // Filter filled vs non-filled inputs
    const totalFilled = getTextInputs(inputs)
        .filter(input => input.value !== '').length;

    const totalSelected = getSelectInputs(inputs)
        .filter(select => select.value !== 'default').length;

    // Count radio's checked
    const totalRadios = getRadioInputs(inputs)
        .filter(radio => radio.checked).length;

    return totalFilled + totalSelected + totalRadios;
}

function countRequiredFilled(inputs) {
    // Filter filled vs non-filled inputs
    const totalFilled = getTextInputs(inputs)
        .filter(input => input.hasAttribute('required'))
        .filter(input => input.value !== '').length;

    const totalSelected = getSelectInputs(inputs)
        .filter(select => select.hasAttribute('required'))
        .filter(select => select.value !== 'default').length;

    const totalRadios = getRadioInputs(inputs)
        .filter(radio => radio.hasAttribute('required'))
        .filter(radio => radio.checked).length;

    return totalFilled + totalSelected + totalRadios;
}

function updateTotalFilled(inputs) {
    totalFieldsFill.textContent = countTotalFilled(inputs);
}

function updateRequiredFilled(inputs) {
    const requiredFilled = countRequiredFilled(inputs);
    requiredFieldsFill.textContent = requiredFilled;
}

// Create 'Pending' state
function setPending(parentEl, message = 'Pending') {
    const pendingSpan = document.createElement('span');
    pendingSpan.className = 'text-gray-400 animate-pulse';
    pendingSpan.textContent = message;
    parentEl.append(pendingSpan);
}

// Create status chip
function createStatusChip(ready = false, title = STATUS_CHIP_NOT_READY_TTILE) {
    const chip = document.createElement('div');
    chip.id = 'status-chip';
    chip.className = 'block cursor-pointer transition-colors text-sm p-2 rounded-sm flex items-center gap-2';

    const animatedDot = document.createElement('div');
    animatedDot.className = 'h-2 w-2 rounded-full animate-pulse';

    const span = document.createElement('span');
    span.textContent = title;

    if (!ready) {
        chip.className += ' bg-red-900 hover:bg-red-800 text-red-200';
        animatedDot.classList.add('bg-red-200');
        chip.append(animatedDot, span);
        return chip;
    }

    chip.className += ' bg-emerald-950 hover:bg-emerald-800 text-emerald-200';
    animatedDot.classList.add('bg-emerald-200');
    chip.append(animatedDot, span);

    return chip;
}

// Update company name
function updateCompanyName() {
    // Check if value is empty
    const companyName = nameInput.value;

    // If empty, set 'Pending' state
    if (!companyName) {
        companyNameEl.textContent = '';
        setPending(companyNameEl);
        return;
    }

    // Update company name value
    companyNameEl.textContent = companyName;
}

// Get checked client status
function getCheckedClientStatus() {
    const [clientStatus] = [...clientStatusInput]
        .filter(clientStatus => clientStatus.checked);

    // In case there's non selected yet
    if (!clientStatus) return;

    return clientStatus.value;
}

// Update client status
function updateClientStatus() {
    // Check if value is checked
    const clientStatus = getCheckedClientStatus();

    // If empty, set 'Pending' state
    if (!clientStatus) {
        clientStatusEl.textContent = '';
        setPending(clientStatusEl);
        return;
    }

    // Update client status value
    clientStatusEl.textContent = capitalize(clientStatus);
}

function setReadySummary() {
    // Make the required filled green
    requiredFieldsFill.className = 'text-green-500 animate-pulse';

    // Set status chip to 'Ready'
    setStatusChip(true);

    // Make submit button available
    submitBtn.className = 'cursor-pointer flex items-center justify-center gap-2 px-4 py-3 bg-primary-400 hover:bg-primary-500 transition-colors rounded-lg text-white flex items-center gap-2';
    submitBtn.removeAttribute('disabled');
}

function setDisabledSummary() {
    // Make the required filled red
    requiredFieldsFill.className = 'text-red-500 animate-pulse';

    // Set status chip to 'Not ready'
    setStatusChip(false);

    // Make submit button disabled
    submitBtn.className = 'flex items-center justify-center gap-2 px-4 py-3 bg-primary-200 transition-colors rounded-lg text-white flex items-center gap-2';
    submitBtn.setAttribute('disabled', true);
}

function checkFormCompleted() {
    const requiredFilled = countRequiredFilled(formInputs);
    const requiredMin = countRequiredFields(formInputs);

    if(requiredFilled === requiredMin) {
        setReadySummary();
        return;
    }

    setDisabledSummary();
}

function setStatusChip(ready) {
    // Remove current status chip
    const statusChip = document.getElementById('status-chip');
    if (statusChip) {
        document.getElementById('status-chip').remove();
    }

    // Option: Disabled
    if (!ready) {
        const chip = createStatusChip(ready, STATUS_CHIP_NOT_READY_TTILE);
        formStatus.append(chip);
        return;
    }

    const chip = createStatusChip(ready, STATUS_CHIP_READY_TITLE);
    formStatus.append(chip);
}

function updateSummary() {
    // Update client name
    updateCompanyName();

    // Update client status
    updateClientStatus();

    // Update total and required fields filled
    updateTotalFilled(formInputs);
    updateRequiredFilled(formInputs);

    // Check if form is completed
    checkFormCompleted();
}

function initSummary() {
    // Set total fields MAX and default filled values
    totalFieldsMax.textContent = countTotalFields(formInputs);
    updateTotalFilled(formInputs);

    // Set total REQUIRED fields and default filled values
    requiredFieldsMax.textContent = countRequiredFields(formInputs);
    updateRequiredFilled(formInputs);

    // Check if form is completed
    checkFormCompleted();
}

// ### DO NOT REMOVE ###
initSummary();

// Change event listener
clientForm.addEventListener('input', updateSummary);
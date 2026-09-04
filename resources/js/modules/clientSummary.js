import { capitalize } from './utils.js';

// Form inputs
const clientForm = document.getElementById('create-client-form');
const inputs = clientForm.querySelectorAll('input');
const radios = clientForm.querySelectorAll('input[type="radio"]');
const selects = clientForm.querySelectorAll('select');

// Summary details
const totalFieldsMax = document.getElementById('total-fields-max');
const totalFieldsFilled = document.getElementById('total-fields-fill');

const totalRequiredMax = document.getElementById('required-fields-max');
const totalRequiredFilled = document.getElementById('required-fields-fill');

// Exluded input types
const excludedTypes = [
    'hidden',
    'submit',
    'radio'
];

/***
 * Total fields: 15
 * Required fields: 5
 */

// Divide radios per group
function countRadioGroups() {
    if(!clientForm) return;

    return [...new Set([...radios].map(radio => radio.name))].length;
}

// Get all fields
function getAllFields() {
    return [...inputs, ...radios, ...selects];
}

// Count total fields
function countTotalFields() {
    if(!clientForm) return;

    let sum = 0;

    // Count inputs
    sum += [...inputs]
        .filter(el => !excludedTypes.includes(el.type))
        .length;


    // Divide radios per group
    sum += countRadioGroups();

    // Count selects
    sum += selects.length;

    return sum;

}

// Count required inputs
function countRequired() {
    if(!clientForm) return;

    const allFields = getAllFields();
    return allFields
        .filter(field => field.hasAttribute('required'))
        .length;
}

// Set total and required fields
function setMaxFields() {
    totalFieldsMax.textContent = countTotalFields();
    totalRequiredMax.textContent = countRequired();
}

// Get fields filled count
function getFilledCount() {
    return [...inputs]
        .filter(input => !excludedTypes.includes(input.type))
        .filter(input => input.value !== '')
        .length;
}

// Get required fields filled count
function getRequiredFilledCount() {
    return [...inputs]
        .filter(input => !excludedTypes.includes(input.type))
        .filter(input => input.hasAttribute('required'))
        .filter(input => input.value !== '')
        .length;
}

// Update summary
function updateSummary() {
    // Update total and required fields
    totalFieldsFilled.textContent = getFilledCount();
    totalRequiredFilled.textContent = getRequiredFilledCount();

}

// Init summary
function initSummary() {
    // Update total and required fields
    setMaxFields();
}

initSummary();

// Event listener
clientForm.addEventListener('input', updateSummary);
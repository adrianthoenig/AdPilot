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

const companyName = document.getElementById('company-name-value');

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
function getRadioGroupNames() {
    if(!clientForm) return;

    return [...new Set(
        [...radios].map(radio => radio.name)
    )];
}

function divideRadioGroups() {
    if(!clientForm) return;

    const groups = [];


    getRadioGroupNames()
    .forEach((groupName, index) => {
        groups[index] = [...radios].filter(radio => radio.name === groupName);
    })

    return groups;
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
    sum += divideRadioGroups().length;

    // Count selects
    sum += selects.length;

    return sum;

}

// Count required inputs
function countRequired() {
    if(!clientForm) return;

    let sum = 0;

    // Get required fields
    sum += getAllFields()
        .filter(field => field.type !== 'radio')
        .filter(field => field.hasAttribute('required')).length;

    // Check for single radio required fields
    divideRadioGroups().forEach(radioGroup => {
        sum += radioGroup.some(radio => radio.hasAttribute('required'));
    })


    return sum;

}

// Set total and required fields
function setMaxFields() {
    totalFieldsMax.textContent = countTotalFields();
    totalRequiredMax.textContent = countRequired();
}

// Get fields filled count
function getFilledCount() {
    let sum = 0;

    // Count inputs filled
    sum += [...inputs]
        .filter(input => !excludedTypes.includes(input.type))
        .filter(input => input.value !== '')
        .length;

    // Count select options filled
    selects.forEach(select => {
        if(select.value && select.value !== 'default') {
            sum++;
        }
    })

    // Sum radio buttons filled
    radios.forEach(radio => {
        if(radio.checked) {
            sum++;
        }
    })

    return sum;

}

// Get required fields filled count
function getRequiredFilledCount() {
    let sum = 0;

    // Sum required inputs
    sum += [...inputs]
        .filter(input => !excludedTypes.includes(input.type))
        .filter(input => input.hasAttribute('required'))
        .filter(input => input.value !== '')
        .length;

    // Sum required selects
    selects.forEach(select => {
        if(select.value && select.value !== 'default' && select.hasAttribute('required')) {
            sum++;
        }
    })

    // Sum required radios
    sum += [...radios]
        .filter(radio => radio.hasAttribute('required'))
        .filter(radio => radio.checked)
        .length;

    return sum;
}

// Get company name
function getCompanyName() {
    if(!clientForm) return;
    return document.getElementById('name').value;
}

// Update company name
function updateCompanyName() {
    if(!clientForm) return;
    let companyNameValue = getCompanyName();

    if(!companyNameValue) {    
        // Create 'pending' span element
        const span = document.createElement('span');
        span.className = 'text-gray-400 animate-pulse';
        span.textContent = 'Pending';

        // Appending span element
        companyName.textContent = '';
        companyName.append(span);
        return;
    }
    companyName.textContent = companyNameValue;
}

// Update summary
function updateSummary() {
    // Update total and required fields
    totalFieldsFilled.textContent = getFilledCount();
    totalRequiredFilled.textContent = getRequiredFilledCount();

    // Update company name
    updateCompanyName();

}

// Init summary
function initSummary() {
    // Update total and required fields
    setMaxFields();
}

initSummary();

// Event listener
clientForm.addEventListener('input', updateSummary);
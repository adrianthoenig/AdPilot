'use strict';

// DOM Elements
const companyName = document.getElementById('company-name-value');
const clientStatus = document.getElementById('client-status-value');

const totalFields = document.getElementById('total-fields-value');
const totalFieldsFilled = document.getElementById('total-fields-filled');

const requiredFields = document.getElementById('required-fields-value');
const requiredFieldsFilled = document.getElementById('required-fields-filled');

const formStatus = document.getElementById('status-value');

// Form
const createForm = document.getElementById('create-client-form');

// Capitalize string
function capitalize(str) {
    return str.charAt(0).toUpperCase() + str.slice(1);
}

// Count total fields
function countTotalFields() {
    if(!createForm) return;

    let sum = 0;

    // Including inputs
    sum += createForm.querySelectorAll('input').length;
    sum += createForm.querySelectorAll('select').length;
    
    // Excluding inputs
    sum -= createForm.querySelectorAll('input[type="hidden"]').length;
    sum -= createForm.querySelectorAll('input[type="submit"]').length;

    return sum;
}

function updateTotalFields() {
    if(!createForm) return;

    const exludedTypes = [
        'hidden',
        'radio'
    ];

    let filled = 0;

    createForm.querySelectorAll('input').forEach(el => {
        const inputField = el.closest('input');

        if(!exludedTypes.includes(inputField.type)) {
            if(inputField.value) filled++;
        }
    })

    return filled;
}

// Count required fields
function countRequiredFields() {
    if(!createForm) return;

    let sum = 0;

    sum += createForm.querySelectorAll('input[required]').length;
    sum += createForm.querySelectorAll('select[required]').length;

    return sum;
}

function updateRequiredFields() {
    if(!createForm) return;

    let filled = 0;

    createForm.querySelectorAll('input[required]').forEach(el => {
        if(el.value) filled++;
    });

    return filled;
}

// Should give 5

// Init summary
function initSummary() {
    // Change total fields
    totalFieldsFilled.textContent = updateTotalFields();
    totalFields.textContent = countTotalFields();

    // Change required fields
    requiredFields.textContent = countRequiredFields();
}

initSummary();

createForm.addEventListener('input', (e) => {
    const input = e.target;

    // Update company name
    if(input.id === 'name') {
        companyName.textContent = input.value;
    }

    // Update client status
    if(input.name === 'client_status') {
        clientStatus.textContent = capitalize(input.value);
    }

    // Check to add total field fille
    totalFieldsFilled.textContent = updateTotalFields();
    requiredFieldsFilled.textContent = updateRequiredFields();
})
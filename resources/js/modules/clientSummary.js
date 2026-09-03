'use strict';

// DOM Elements
const companyName = document.getElementById('company-name-value');
const clientStatus = document.getElementById('client-status-value');
const totalFields = document.getElementById('total-fields-value');
const requiredFields = document.getElementById('required-fields-value');
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

    // Count inputs
    createForm.querySelectorAll('input').forEach(input => {
        if(input.type !== 'hidden' && input.type !== 'submit' && input.type !== 'radio') sum++;
    })

    // Count selects
    sum += createForm.querySelectorAll('select').length;

    // Count radio buttons


    return sum;
}

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
})
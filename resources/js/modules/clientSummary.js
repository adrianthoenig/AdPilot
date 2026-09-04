import { capitalize } from './utils.js';

// DOM Elements
const clientForm = document.getElementById('create-client-form');
const inputs = clientForm.querySelectorAll('input');
const radios = clientForm.querySelectorAll('input[type="radio"]');
const selects = clientForm.querySelectorAll('select');

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

// Check if field is empty
function isFilled(element) {

}

// Divide radios per group
function countRadioGroups() {
    if(!clientForm) return;

    return [...new Set([...radios].map(radio => radio.name))].length;
}

// Count total fields
function countTotal() {
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

    

}
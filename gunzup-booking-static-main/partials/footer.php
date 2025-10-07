<!-- ========== Footer Start ========== -->
<footer class="footer">
  <div class="container-xxl" style="background-color:transparent!important;">
    <div class="row">
      <div class="col-12 text-center"> 
        <script>
                    document.write(new Date().getFullYear())
                
          
          
          </script> 
        &copy; GunzUp! Paintball  <a href="privacy.php">Privacy Policy</a> • <a href="terms.php">Terms & Conditions</a>*</div>
    </div>
  </div>
</footer>
<!-- ========== Footer End ========== --> 

<!-- ========== Modals Start ========== -->

<!-- Flatpickr for date picker -->
<link href="assets/vendor/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

<script src="assets/vendor/flatpickr/flatpickr.min.js"></script>

<!-- Signature Pad CDN -->
<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.7/dist/signature_pad.umd.min.js"></script>

<!-- Signature Pad Styles -->
<style>
.signature-pad-container {
    position: relative;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    background: #fff;
    margin: 20px 0;
    overflow: hidden;
}

.signature-pad-container:hover {
    border-color: #007bff;
    transition: border-color 0.3s ease;
}

.signature-placeholder {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #ccc;
    font-size: 24px;
    font-weight: 300;
    pointer-events: none;
    z-index: 3;
    text-align: center;
    user-select: none;
    opacity: 1;
    transition: opacity 0.3s ease;
}

.signature-pad-container.signing .signature-placeholder,
.signature-pad-container.has-signature .signature-placeholder {
    opacity: 0;
}

.signature-pad {
    width: 100%;
    height: 150px;
    display: block;
    cursor: crosshair;
    border: none;
    background: white;
    position: relative;
    z-index: 2;
}

.signature-pad-container.signing {
    border-color: #28a745;
}

.signature-buttons {
    display: flex;
    gap: 10px;
    margin-top: 10px;
    justify-content: flex-end;
}

.signature-btn {
    padding: 6px 12px;
    border: none;
    border-radius: 4px;
    font-size: 12px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    min-width: 70px;
}

.signature-btn:disabled {
    opacity: 0.6;
    cursor: not-allowed;
}

.signature-btn-clear {
    background-color: #dc3545;
    color: white;
}

.signature-btn-clear:hover:not(:disabled) {
    background-color: #c82333;
}

.signature-status {
    margin-top: 8px;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 11px;
    font-weight: 500;
    opacity: 0;
    transition: all 0.3s ease;
}

.signature-status.show {
    opacity: 1;
}

.signature-status.success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.signature-status.error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}
</style>

<script>
// Dynamic Add-ons functionality
function addAddonRow() {
    const container = document.getElementById('addons-container');
    const newRow = document.createElement('div');
    newRow.className = 'addon-row d-flex align-items-center mb-2';
    
    newRow.innerHTML = `
        <div class="flex-grow-1 me-2">
            <select class="form-control addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">Select Add-on</option>
                <option value="grenade">Grenade + $12.00</option>
                <option value="upgraded-gun">Upgraded Gun package + $100.00</option>
                <option value="smoke-grenade">Smoke Grenade + $8.00</option>
                <option value="extra-paint">Extra Paint (500 rounds) + $25.00</option>
                <option value="tactical-vest">Tactical Vest + $15.00</option>
                <option value="ghillie-suit">Ghillie Suit + $20.00</option>
            </select>
        </div>
        <div class="icon-buttons">
            <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeAddonRow(this)" title="Remove this add-on"></i>
            <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addAddonRow()" title="Add another add-on"></i>
        </div>
    `;
    
    // Remove plus button from previous rows
    const allPlusButtons = container.querySelectorAll('.bxs-plus-circle');
    allPlusButtons.forEach(button => {
        if (button !== newRow.querySelector('.bxs-plus-circle')) {
            button.style.display = 'none';
        }
    });
    
    container.appendChild(newRow);
    
    // Initialize Choices.js for the new select element
    const newSelect = newRow.querySelector('.addon-select');
    if (typeof Choices !== 'undefined') {
        new Choices(newSelect, {
            searchEnabled: false,
            removeItemButton: true
        });
    }
}

function removeAddonRow(element) {
    const row = element.closest('.addon-row');
    const container = document.getElementById('addons-container');
    
    // Don't remove if it's the only row
    if (container.children.length <= 1) {
        return;
    }
    
    // Remove the row
    row.remove();
    
    // Make sure the last row has the plus button visible
    const remainingRows = container.querySelectorAll('.addon-row');
    if (remainingRows.length > 0) {
        const lastRow = remainingRows[remainingRows.length - 1];
        const plusButton = lastRow.querySelector('.bxs-plus-circle');
        if (plusButton) {
            plusButton.style.display = 'inline';
        }
    }
}

// Register Modal Add-ons functionality


// Initialize on document ready
document.addEventListener('DOMContentLoaded', function() {
    // Hide plus buttons from all but the last row initially
    const container = document.getElementById('addons-container');
    if (container) {
        const rows = container.querySelectorAll('.addon-row');
        rows.forEach((row, index) => {
            const plusButton = row.querySelector('.bxs-plus-circle');
            if (plusButton && index < rows.length - 1) {
                plusButton.style.display = 'none';
            }
        });
    }
    

    
    // Initialize booking modal available add-ons
    const bookingContainer = document.getElementById('available-addons-container-booking');
    if (bookingContainer) {
        const rows = bookingContainer.querySelectorAll('.available-addon-row');
        rows.forEach((row, index) => {
            const plusButton = row.querySelector('.bxs-plus-circle');
            if (plusButton && index < rows.length - 1) {
                plusButton.style.display = 'none';
            }
        });
    }
    
    // Initialize register modal available add-ons
    const registerBookingContainer = document.getElementById('available-addons-container-register');
    if (registerBookingContainer) {
        const rows = registerBookingContainer.querySelectorAll('.available-addon-row');
        rows.forEach((row, index) => {
            const plusButton = row.querySelector('.bxs-plus-circle');
            if (plusButton && index < rows.length - 1) {
                plusButton.style.display = 'none';
            }
        });
    }
    
    // Initialize Inline Calendar for Date/Time Modal
    let selectedDate = null;
    let selectedTime = null;
    
    // Function to open date/time modal without closing parent
window.openDateTimeModal = function(parentModalId = 'registerBookingModal') {
  window.currentParentModal = parentModalId;
  const dateTimeModal = new bootstrap.Modal(document.getElementById('dateTimeModal'), {
    backdrop: 'static',
    keyboard: false
  });
  dateTimeModal.show();
};
    
    if (typeof flatpickr !== 'undefined') {
        const calendarPicker = flatpickr("#calendar-picker", {
            inline: true,
            dateFormat: "Y-m-d", 
            minDate: "today",
            defaultDate: new Date(),
            onChange: function(selectedDates, dateStr, instance) {
                selectedDate = dateStr;
            }
        });
    }
    
    // Handle time selection from available times
    document.addEventListener('change', function(e) {
        if (e.target && e.target.id === 'modal-available-times') {
            selectedTime = e.target.value;
        }
    });
    
    // Handle Confirm Selection button
    document.getElementById('confirmDateTimeBtn').addEventListener('click', function() {
        const modalTimeInput = document.getElementById('modal-available-times');
        selectedTime = modalTimeInput.value;
        
        if (selectedDate && selectedTime) {
            // Update the correct parent modal fields based on which modal is open
            if (window.currentParentModal === 'registerBookingModal') {
                document.getElementById('register-booked-date').value = selectedDate + ' - ' + selectedTime;
            } else if (window.currentParentModal === 'bookingModal') {
                document.getElementById('booked-date').value = selectedDate + ' - ' + selectedTime;
            }
            
            // Restore parent modal opacity immediately
            const parentModal = document.getElementById(window.currentParentModal);
            if (parentModal) {
                parentModal.classList.remove('modal-faded');
            }
            
            // Close the date/time modal
            const dateTimeModal = bootstrap.Modal.getInstance(document.getElementById('dateTimeModal'));
            dateTimeModal.hide();
        } else {
            alert('Please select both a date and time before confirming.');
        }
    });
    
    // Reset selections when modal opens
    document.getElementById('dateTimeModal').addEventListener('show.bs.modal', function() {
        selectedDate = null;
        selectedTime = null;
        
        // Reset the choices.js time input
        const modalTimeInput = document.getElementById('modal-available-times');
        if (modalTimeInput) {
            modalTimeInput.value = '';
            // Trigger change event to update choices.js
            modalTimeInput.dispatchEvent(new Event('change'));
        }
        
        // Fade the parent modal
        const parentModal = document.getElementById(window.currentParentModal || 'registerBookingModal');
        if (parentModal) {
            parentModal.classList.add('modal-faded');
        }
    });
    
    // Restore parent modal opacity when date/time modal closes
    document.getElementById('dateTimeModal').addEventListener('hidden.bs.modal', function() {
        const parentModal = document.getElementById(window.currentParentModal || 'registerBookingModal');
        if (parentModal) {
            parentModal.classList.remove('modal-faded');
        }
    });
});

// Dynamic Available Add-ons functionality for Booking Modal
function addAvailableAddonRowBooking() {
    const container = document.getElementById('available-addons-container-booking');
    const newRow = document.createElement('div');
    newRow.className = 'row g-3 mb-3 available-addon-row';
    
    newRow.innerHTML = `
        <div class="col-md-4 form-group offset-md-1 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Makes add-ons available in checkout for this booking.">
            <label for="payment-status" class="form-label">Add-ons</label>
            <select class="form-control available-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">None</option>
                <option value="">Grenade + $12.00</option>
                <option value="">Upgraded Gun package + $100.00</option>
                <option value="">Smoke Grenade + $8.00</option>
                <option value="">Extra Paint (500 rounds) + $25.00</option>
                <option value="">Tactical Vest + $15.00</option>
                <option value="">Ghillie Suit + $20.00</option>
            </select>
        </div>
        <div class="col-md-1 d-flex align-items-end align-items-center">
            <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeAvailableAddonRowBooking(this)" title="Remove this add-on"></i>
            <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addAvailableAddonRowBooking()" title="Add another add-on"></i>
        </div>
    `;
    
    container.appendChild(newRow);
    
    // Hide plus buttons from all other rows
    const rows = container.querySelectorAll('.available-addon-row');
    rows.forEach((row, index) => {
        const plusButton = row.querySelector('.bxs-plus-circle');
        if (plusButton && index < rows.length - 1) {
            plusButton.style.display = 'none';
        }
    });
}

function removeAvailableAddonRowBooking(element) {
    const row = element.closest('.available-addon-row');
    const container = document.getElementById('available-addons-container-booking');
    
    // Don't remove if it's the only row
    if (container.children.length <= 1) {
        return;
    }
    
    // Remove the row
    row.remove();
    
    // Make sure the last row has the plus button visible
    const remainingRows = container.querySelectorAll('.available-addon-row');
    if (remainingRows.length > 0) {
        const lastRow = remainingRows[remainingRows.length - 1];
        const plusButton = lastRow.querySelector('.bxs-plus-circle');
        if (plusButton) {
            plusButton.style.display = 'inline';
        }
        
        // Hide plus buttons from all other rows
        remainingRows.forEach((row, index) => {
            const plusButton = row.querySelector('.bxs-plus-circle');
            if (plusButton && index < remainingRows.length - 1) {
                plusButton.style.display = 'none';
            }
        });
    }
}

// Dynamic Available Add-ons functionality for Register Modal
function addAvailableAddonRowRegister() {
    const container = document.getElementById('available-addons-container-register');
    const newRow = document.createElement('div');
    newRow.className = 'row g-3 mb-3 available-addon-row';
    
    newRow.innerHTML = `
        <div class="col-md-4 form-group offset-md-1 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Makes add-ons available in checkout for this booking.">
            <label for="payment-status" class="form-label">Add-ons</label>
            <select class="form-control available-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">None</option>
                <option value="">Grenade + $12.00</option>
                <option value="">Upgraded Gun package + $100.00</option>
                <option value="">Smoke Grenade + $8.00</option>
                <option value="">Extra Paint (500 rounds) + $25.00</option>
                <option value="">Tactical Vest + $15.00</option>
                <option value="">Ghillie Suit + $20.00</option>
            </select>
        </div>
        <div class="col-md-1 d-flex align-items-end align-items-center">
            <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeAvailableAddonRowRegister(this)" title="Remove this add-on"></i>
            <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addAvailableAddonRowRegister()" title="Add another add-on"></i>
        </div>
    `;
    
    container.appendChild(newRow);
    
    // Hide plus buttons from all other rows
    const rows = container.querySelectorAll('.available-addon-row');
    rows.forEach((row, index) => {
        const plusButton = row.querySelector('.bxs-plus-circle');
        if (plusButton && index < rows.length - 1) {
            plusButton.style.display = 'none';
        }
    });
}

function removeAvailableAddonRowRegister(element) {
    const row = element.closest('.available-addon-row');
    const container = document.getElementById('available-addons-container-register');
    
    // Don't remove if it's the only row
    if (container.children.length <= 1) {
        return;
    }
    
    // Remove the row
    row.remove();
    
    // Make sure the last row has the plus button visible
    const remainingRows = container.querySelectorAll('.available-addon-row');
    if (remainingRows.length > 0) {
        const lastRow = remainingRows[remainingRows.length - 1];
        const plusButton = lastRow.querySelector('.bxs-plus-circle');
        if (plusButton) {
            plusButton.style.display = 'inline';
        }
        
        // Hide plus buttons from all other rows
        remainingRows.forEach((row, index) => {
            const plusButton = row.querySelector('.bxs-plus-circle');
            if (plusButton && index < remainingRows.length - 1) {
                plusButton.style.display = 'none';
            }
        });
    }
}

// Dynamic Discount Add-ons functionality for Group Modals
function addDiscountAddonRowGroup1() {
    const container = document.getElementById('discounted-addons-container-group1');
    const newRow = document.createElement('div');
    newRow.className = 'row g-3 mb-3 discount-addon-row';
    
    // Generate unique IDs for this row
    const timestamp = Date.now();
    const uniqueId = `Group1_${timestamp}`;
    
    newRow.innerHTML = `
        <div class="col-md-3 form-group offset-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Items available at discount for this group">
            <label for="payment-status" class="form-label">Assign Discounted Add-ons</label>
            <select class="form-control discount-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">Field Fee</option>
                <option value="">Paint</option>
                <option value="">Rental Packages</option>
                <option value="">Mask</option>
                <option value="">Grenade + $12.00</option>
                <option value="">Upgraded Gun package + $100.00</option>
            </select>
        </div>   
        <div class="col-md-2 form-group mb-3" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Discount Percentage" data-bs-content="Discount percentage for this group">
            <label for="discountPercentGroup1_${uniqueId}" class="form-label">% Discount</label>
            <div class="input-group">
              <span class="input-group-text">%</span>
              <input type="number" class="form-control" id="discountPercentGroup1_${uniqueId}" 
                     min="0" max="100" step="1" 
                     placeholder="0" 
                     title="Please enter a valid discount percentage (e.g., 10)" 
                     required>
            </div>
        </div>
        <div class="col-md-2 mb-3">  
            <label for="discountAmountGroup1_${uniqueId}" class="form-label">$ Discount</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="discountAmountGroup1_${uniqueId}" 
                     min="0.01" max="999.99" step="0.01" 
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid discount amount (e.g., 10.00)" 
                     required>
            </div> 
        </div>
        <div class="col-md-1 d-flex align-items-end align-items-center">
            <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeDiscountAddonRowGroup1(this)" title="Remove this discount add-on"></i>
            <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addDiscountAddonRowGroup1()" title="Add another discount add-on"></i>
        </div>
    `;
    
    container.appendChild(newRow);
    
    // Hide plus buttons from all other rows
    const rows = container.querySelectorAll('.discount-addon-row');
    rows.forEach((row, index) => {
        const plusButton = row.querySelector('.bxs-plus-circle');
        if (plusButton && index < rows.length - 1) {
            plusButton.style.display = 'none';
        }
    });
}

function removeDiscountAddonRowGroup1(element) {
    const row = element.closest('.discount-addon-row');
    const container = document.getElementById('discounted-addons-container-group1');
    
    // Don't remove if it's the only row
    if (container.children.length <= 1) {
        return;
    }
    
    // Remove the row
    row.remove();
    
    // Make sure the last row has the plus button visible
    const remainingRows = container.querySelectorAll('.discount-addon-row');
    if (remainingRows.length > 0) {
        const lastRow = remainingRows[remainingRows.length - 1];
        const plusButton = lastRow.querySelector('.bxs-plus-circle');
        if (plusButton) {
            plusButton.style.display = 'inline';
        }
        
        // Hide plus buttons from all other rows
        remainingRows.forEach((row, index) => {
            const plusButton = row.querySelector('.bxs-plus-circle');
            if (plusButton && index < remainingRows.length - 1) {
                plusButton.style.display = 'none';
            }
        });
    }
}

function addDiscountAddonRowGroup2() {
    const container = document.getElementById('discounted-addons-container-group2');
    const newRow = document.createElement('div');
    newRow.className = 'row g-3 mb-3 discount-addon-row';
    
    // Generate unique IDs for this row
    const timestamp = Date.now();
    const uniqueId = `Group2_${timestamp}`;
    
    newRow.innerHTML = `
        <div class="col-md-3 form-group offset-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Items available at discount for this group">
            <label for="payment-status" class="form-label">Assign Discounted Add-ons</label>
            <select class="form-control discount-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">Field Fee</option>
                <option value="">Paint</option>
                <option value="">Rental Packages</option>
                <option value="">Mask</option>
                <option value="">Grenade + $12.00</option>
                <option value="">Upgraded Gun package + $100.00</option>
            </select>
        </div>   
        <div class="col-md-2 form-group mb-3" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Discount Percentage" data-bs-content="Discount percentage for this group">
            <label for="discountPercentGroup2_${uniqueId}" class="form-label">% Discount</label>
            <div class="input-group">
              <span class="input-group-text">%</span>
              <input type="number" class="form-control" id="discountPercentGroup2_${uniqueId}" 
                     min="0" max="100" step="1" 
                     placeholder="0" 
                     title="Please enter a valid discount percentage (e.g., 10)" 
                     required>
            </div>
        </div>
        <div class="col-md-2 mb-3">  
            <label for="discountAmountGroup2_${uniqueId}" class="form-label">$ Discount</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="discountAmountGroup2_${uniqueId}" 
                     min="0.01" max="999.99" step="0.01" 
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid discount amount (e.g., 10.00)" 
                     required>
            </div> 
        </div>
        <div class="col-md-1 d-flex align-items-end align-items-center">
            <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeDiscountAddonRowGroup2(this)" title="Remove this discount add-on"></i>
            <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addDiscountAddonRowGroup2()" title="Add another discount add-on"></i>
        </div>
    `;
    
    container.appendChild(newRow);
    
    // Hide plus buttons from all other rows
    const rows = container.querySelectorAll('.discount-addon-row');
    rows.forEach((row, index) => {
        const plusButton = row.querySelector('.bxs-plus-circle');
        if (plusButton && index < rows.length - 1) {
            plusButton.style.display = 'none';
        }
    });
}

function removeDiscountAddonRowGroup2(element) {
    const row = element.closest('.discount-addon-row');
    const container = document.getElementById('discounted-addons-container-group2');
    
    // Don't remove if it's the only row
    if (container.children.length <= 1) {
        return;
    }
    
    // Remove the row
    row.remove();
    
    // Make sure the last row has the plus button visible
    const remainingRows = container.querySelectorAll('.discount-addon-row');
    if (remainingRows.length > 0) {
        const lastRow = remainingRows[remainingRows.length - 1];
        const plusButton = lastRow.querySelector('.bxs-plus-circle');
        if (plusButton) {
            plusButton.style.display = 'inline';
        }
        
        // Hide plus buttons from all other rows
        remainingRows.forEach((row, index) => {
            const plusButton = row.querySelector('.bxs-plus-circle');
            if (plusButton && index < remainingRows.length - 1) {
                plusButton.style.display = 'none';
            }
        });
    }
}

// Fix z-index for booked package dropdown
document.addEventListener('DOMContentLoaded', function() {
    const bookingModal = document.getElementById('bookingModal');
    
    if (bookingModal) {
        bookingModal.addEventListener('shown.bs.modal', function() {
            // Fix booked package dropdown z-index
            const bookedPackageSelect = document.getElementById('booked-package');
            if (bookedPackageSelect) {
                const choicesContainer = bookedPackageSelect.nextElementSibling;
                if (choicesContainer && choicesContainer.classList.contains('choices')) {
                    choicesContainer.style.zIndex = '1500';
                    choicesContainer.style.position = 'relative';
                }
            }
            
            // Lower z-index for add-ons container
            const addonsContainer = document.getElementById('available-addons-container-booking');
            if (addonsContainer) {
                addonsContainer.style.zIndex = '1400';
                addonsContainer.style.position = 'relative';
                
                // Set lower z-index for all choices in add-ons container
                const addonsChoices = addonsContainer.querySelectorAll('.choices');
                addonsChoices.forEach(function(choice) {
                    choice.style.zIndex = '1400';
                });
            }
        });
    }
    
    // Handle Live Waiver Modal - Set today's date automatically
    const liveWaiverModal = document.getElementById('liveWaiverModal');
    if (liveWaiverModal) {
        liveWaiverModal.addEventListener('shown.bs.modal', function() {
            // Set today's date automatically
            const todaysDateDisplay = document.getElementById('todaysDateDisplay');
            if (todaysDateDisplay) {
                const today = new Date();
                const options = { 
                    weekday: 'long', 
                    year: 'numeric', 
                    month: 'long', 
                    day: 'numeric' 
                };
                todaysDateDisplay.textContent = today.toLocaleDateString('en-US', options);
            }
        });
    }
});
</script>
<!-- ========== BOOKING MODALS START ========== -->

<!-- Edit Existing Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">{Group Name} Booking</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <div class="col-md-3 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">Group ID</label>
          <input type="text" class="form-control" id="validationDefault01" value="Group Name" required>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-4 offset-md-1">
            <label for="booked-package" class="form-label">Booked Package / Game Type</label>
            <select class="form-control" id="booked-package" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
              <option value="">Paintball</option>
              <option value="">Airsoft</option>
              <option value="">Low Impact Paintball</option>
              <option value="">{Packages Available from Park}</option>
            </select>
          </div>
          <div class="col-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Please specify the total number of guests in your group. Self equipped guests will not be calulated as requiring a package. However, additional gear / supplies maybe required.">
            <label for="totalGuests" class="form-label">Total Guests</label>
            <input type="number" class="form-control" id="totalGuests" placeholder="000" min="1" max="999" value="6" required>
          </div>
          <div class="col-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Attention!" data-bs-content="Self equipped guests are assumed to have all gear, including required safety gear to participate. If they do not, you will need to rent additional gear. If you don't see the needed gear in available add-ons there may be a risk of limited stock on day of booking.">
            <label for="selfEquippedGuests" class="form-label">Self Equiped Guests</label>
            <input type="number" class="form-control" id="selfEquippedGuests" placeholder="000" min="0" max="999" value="2">
          </div>
          <div class="col-md-2">
            <label for="booked-date" class="form-label">Book Date / Time</label>
            <input type="text" id="booked-date" class="form-control" placeholder="Date / Time" readonly onclick="openDateTimeModal('bookingModal')">
          </div>
        </div>

        <div id="available-addons-container-booking">
          <div class="row g-3 mb-3 available-addon-row">
            <div class="col-md-4 form-group offset-md-1 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Makes add-ons available in checkout for this booking.">
              <label for="payment-status" class="form-label">Add-ons</label>
              <select class="form-control available-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">None</option>
                <option value="">Grenade + $12.00</option>
                <option value="">Upgraded Gun package + $100.00</option>
                <option value="">Smoke Grenade + $8.00</option>
                <option value="">Extra Paint (500 rounds) + $25.00</option>
                <option value="">Tactical Vest + $15.00</option>
                <option value="">Ghillie Suit + $20.00</option>
              </select>
            </div>
            <div class="col-md-1 d-flex align-items-end align-items-center">
              <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeAvailableAddonRowBooking(this)" title="Remove this add-on"></i>
              <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addAvailableAddonRowBooking()" title="Add another add-on"></i>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Booking Notes</label>
            <textarea class="form-control" id="example-textarea" rows="5"></textarea>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-4 offset-md-1 mb-3">
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationDefault01" value="{Bookers FName}" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefault02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationDefault02" value="{Bookers LName}" required>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-4 offset-md-1 mb-3">
            <label for="example-email" class="form-label">Email</label>
            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000">
            <span class="fs-13 text-muted">e.g "(xxx) xxx-xxxx"</span> </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-12 offset-md-1">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="groupBookingMailingListCheckbox" name="groupBookingMailingListCheckbox" checked data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Marketing Mailing List" data-bs-content="This will add the booker to any marketing mailing lists.">
              <label class="form-check-label" for="groupBookingMailingListCheckbox">
                Sign me up for the mailing list
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-10 offset-md-1" style="margin-top: 20px">
            <label class="form-label">Summary</label>
            <div class="table-responsive table-borderless text-nowrap mt-3 table-centered">
              <table class="table mb-0">
                <thead class="bg-light bg-opacity-50">
                  <tr>
                    <th class="border-0 py-2"> Product Name </th>
                    <th class="border-0 py-2"> Quantity </th>
                    <th class="border-0 py-2"> Price </th>
                  </tr>
                </thead>
                <!-- end thead -->
                <tbody>
                  <tr>
                    <td>Package</td>
                    <td>1</td>
                    <td>$80.00</td>
                  </tr>
                  <tr>
                    <td>Add-on</td>
                    <td>5</td>
                    <td>$10</td>
                  </tr>
                  <tr>
                    <td>Add-on</td>
                    <td>1</td>
                    <td>$40</td>
                  </tr>
                  <tr class="border-bottom">
                    <td>Add-on</td>
                    <td>2</td>
                    <td>$40</td>
                  </tr>
                </tbody>
                <!-- end tbody -->
              </table>
              <!-- end table --> 
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-5 offset-md-1"> </div>
          <div class="col-sm-5">
            <div class="float-end">
              <p> <span class="fw-medium">Sub-total:</span> <span class="float-end">$224</span> </p>
              <p>
                <label for="validationDefault01" class="form-label">Discount Code</label>
                <input type="text" class="form-control" id="validationDefault01" value="DiscountCode" required>
                <span class="fw-medium">Discount (10%):</span> <span class="float-end"> &nbsp;&nbsp;&nbsp;
                $226.65</span> </p>
              <h3>$226.65</h3>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Admin Notes</label>
            <textarea class="form-control" id="example-textarea" rows="5"></textarea>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn  btn-soft-secondary" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-title="Resend Booking Confirmation Email">Resend Confirmation</button>
        <button type="button" class="btn  btn-soft-secondary" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-title="Resend Date Reminder Email">Resend Reminder</button>
        <button type="button" class="btn  btn-soft-secondary" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-title="Resend Payment Reminder Email">Resend Payment Reminder</button>
        <button type="button" class="btn  btn-soft-secondary" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-title="Print"> <i class='bx bx-printer fs-16'></i></button>
        <button type="button" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- ========== END: Edit Existing Booking Modal ========== -->

<!-- ========== START: Register New Booking Modal ========== -->
<!-- Register a Booking Modal -->
<div class="modal fade" id="registerBookingModal" tabindex="-1" aria-labelledby="registerBookingLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="registerBookingLabel">Register a Booking</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <div class="col-md-3 offset-md-1 mb-3">
          <label for="registerGroupId" class="form-label">Group ID</label>
          <input type="text" class="form-control" id="registerGroupId" value="" placeholder="Enter Group Name" required>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-4 offset-md-1">
            <label for="register-booked-package" class="form-label">Booked Package / Game Type</label>
            <select class="form-control" id="register-booked-package" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
              <option value="">Select Package</option>
              <option value="">Paintball Package 1</option>
              <option value="">Paintball Package 2</option>
              <option value="">Low Impact Paintball</option>
              <option value="">Bow Tag</option>
              <option value="">Nerf Under 12</option>
            </select>
          </div>
          <div class="col-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Please specify the total number of guests in your group. Self equipped guests will not be calulated as requiring a package. However, additional gear / supplies maybe required.">
            <label for="registerTotalGuests" class="form-label">Total Guests</label>
            <input type="number" class="form-control" id="registerTotalGuests" placeholder="000" min="1" max="999" value="" required>
          </div>
          <div class="col-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Attention!" data-bs-content="Self equipped guests are assumed to have all gear, including required safety gear to participate. If they do not, you will need to rent additional gear. If you don't see the needed gear in available add-ons there may be a risk of limited stock on day of booking.">
            <label for="registerSelfEquippedGuests" class="form-label">Self Equiped Guests</label>
            <input type="number" class="form-control" id="registerSelfEquippedGuests" placeholder="000" min="0" max="999" value="">
          </div>
                      <div class="col-md-2">
              <label for="register-booked-date" class="form-label">Book Date / Time</label>
                                 <input type="text" id="register-booked-date" class="form-control" placeholder="Date / Time" readonly onclick="openDateTimeModal('registerBookingModal')">
            </div>
        </div>

        <div id="available-addons-container-register">
          <div class="row g-3 mb-3 available-addon-row">
            <div class="col-md-4 form-group offset-md-1 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Makes add-ons available in checkout for this booking.">
              <label for="payment-status" class="form-label">Add-ons</label>
              <select class="form-control available-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">None</option>
                <option value="">Grenade + $12.00</option>
                <option value="">Upgraded Gun package + $100.00</option>
                <option value="">Smoke Grenade + $8.00</option>
                <option value="">Extra Paint (500 rounds) + $25.00</option>
                <option value="">Tactical Vest + $15.00</option>
                <option value="">Ghillie Suit + $20.00</option>
              </select>
            </div>
            <div class="col-md-1 d-flex align-items-end align-items-center">
              <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeAvailableAddonRowRegister(this)" title="Remove this add-on"></i>
              <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addAvailableAddonRowRegister()" title="Add another add-on"></i>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="register-booking-notes" class="form-label">Booking Notes</label>
            <textarea class="form-control" id="register-booking-notes" rows="5"></textarea>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-4 offset-md-1 mb-3">
            <label for="registerFirstName" class="form-label">First name</label>
            <input type="text" class="form-control" id="registerFirstName" placeholder="Enter First Name" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="registerLastName" class="form-label">Last name</label>
            <input type="text" class="form-control" id="registerLastName" placeholder="Enter Last Name" required>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-4 offset-md-1 mb-3">
            <label for="register-email" class="form-label">Email</label>
            <input type="email" id="register-email" name="register-email" class="form-control" placeholder="Enter Email">
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" id="register-phone" data-toggle="input-mask" data-mask-format="(000) 000-0000" placeholder="(xxx) xxx-xxxx">
            <span class="fs-13 text-muted">e.g "(xxx) xxx-xxxx"</span> </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-12 offset-md-1">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="registerBookingMailingListCheckbox" name="registerBookingMailingListCheckbox" checkeddata-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Marketing Mailing List" data-bs-content="This will add the booker to any marketing mailing lists.">
              <label class="form-check-label" for="registerBookingMailingListCheckbox">
                Sign me up for the mailing list
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-10 offset-md-1" style="margin-top: 20px">
            <label class="form-label">Summary</label>
            <div class="table-responsive table-borderless text-nowrap mt-3 table-centered">
              <table class="table mb-0">
                <thead class="bg-light bg-opacity-50">
                  <tr>
                    <th class="border-0 py-2"> Product Name </th>
                    <th class="border-0 py-2"> Quantity </th>
                    <th class="border-0 py-2"> Price </th>
                  </tr>
                </thead>
                <!-- end thead -->
                <tbody id="register-summary-tbody">
                  <tr>
                    <td>Package</td>
                    <td>1</td>
                    <td>$80.00</td>
                  </tr>
                </tbody>
                <!-- end tbody -->
              </table>
              <!-- end table --> 
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-5 offset-md-1"> </div>
          <div class="col-sm-5">
            <div class="float-end">
              <p> <span class="fw-medium">Sub-total:</span> <span class="float-end">$80.00</span> </p>
              <p>
                <label for="register-discount-code" class="form-label">Discount Code</label>
                <input type="text" class="form-control" id="register-discount-code" placeholder="Enter Discount Code">
                <span class="fw-medium">Discount:</span> <span class="float-end"> &nbsp;&nbsp;&nbsp;
                $0.00</span> </p>
              <h3>$80.00</h3>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="register-admin-notes" class="form-label">Admin Notes</label>
            <textarea class="form-control" id="register-admin-notes" rows="5"></textarea>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Create Booking</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- ========== END: Register New Booking Modal ========== -->

<!-- ========== START: Date & Time Selection Modal ========== -->
<!-- Date & Time Selection Modal -->
<div class="modal fade" id="dateTimeModal" tabindex="-1" aria-labelledby="dateTimeModalLabel" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dateTimeModalLabel">Booking Date & Time</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
          <div class="col-12 col-md-6 mb-4">
            <label for="calendar-picker" class="form-label">Select Date</label>
            <div id="calendar-picker" class="flatpickr-calendar-container"></div>
          </div>
          <div class="col-12 col-md-6">
            <label for="modal-available-times" class="form-label">Available Times</label>
            <input class="form-control" id="modal-available-times" data-choices data-choices-text-unique-true type="text" value="9:00, 9:30, 10:00, 10:30, 11:00, 11:30, 12:00, 12:30, 1:00, 1:30, 2:00, 2:30, 3:00, 3:30, 4:00, 4:30, 5:00" placeholder="Select Time" />
            <div class="alert alert-warning alert-dismissible bg-warning-subtle border-warning-subtle text-warning-emphasis mt-3" role="alert">
              <i class="bx bx-error-circle fs-16 me-2"></i>
              <strong>Warning!</strong> This date is not listed as available for the selected package/s
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="confirmDateTimeBtn">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- ========== END: Date & Time Selection Modal ========== -->

<!-- ========== END: BOOKING MODALS ========== -->




<!-- Calendar Package MODAL -->
<div class="modal fade" id="event-modal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form class="needs-validation" name="event-form" id="forms-event" novalidate>
        <div class="modal-header p-3 border-bottom-0">
          <h5 class="modal-title" id="modal-title">{Selected Date} Package Settings</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-3 pb-3 pt-0">
          <div class="row">
            <div class="col-12">
              <div class="mb-3"> </div>
            </div>
            <div class="col-12">
              <div class="mb-3">                
                <div class="" style="z-index: 999999;" >
                  <label for="bookable-times" class="form-label">Bookable Times</label>                   
                    <select class="form-control" id="bookable-times-select" name="bookable-times-select" multiple>
                     <option value="8:00am" selected>8:00am</option>
                     <option value="8:30am">8:30am</option>
                     <option value="9:00am">9:00am</option>
                     <option value="9:30am">9:30am</option>
                     <option value="10:00am">10:00am</option>
                     <option value="10:30am">10:30am</option>
                     <option value="11:00am">11:00am</option>
                     <option value="11:30am">11:30am</option>
                     <option value="12:00pm">12:00pm</option>
                     <option value="12:30pm">12:30pm</option>
                     <option value="1:00pm">1:00pm</option>
                     <option value="1:30pm">1:30pm</option>
                     <option value="2:00pm">2:00pm</option>
                     <option value="2:30pm">2:30pm</option>
                     <option value="3:00pm">3:00pm</option>
                     <option value="3:30pm">3:30pm</option>
                     <option value="4:00pm">4:00pm</option>
                     <option value="4:30pm">4:30pm</option>
                     <option value="5:00pm">5:00pm</option>
                    </select>                   
                </div>
              </div>
            </div>
          </div>
          
            <div class="row">
              <div class="col-12 g-3 mb-3" style="z-index: 100;">
                <label for="duplicate" class="form-label">Duplicate settings for:</label>
                <select class="form-control" id="duplicate" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                  <option value="">None</option>
                  <option value="">Every {Dropped Weekday}</option>
                  <option value="">Every {Dropped Date}</option>
                  <option value="">Every {Dropped Weekday Per Month ie: 3rd tuesday}</option>
                  <option value="">Every {Instance On Calendar}</option>
                </select>
              </div>
            </div>
              <div class="row">
            <div class="col-6">
              <button type="button" class="btn btn-danger" id="btn-delete-event"> Remove </button>
            </div>
            <div class="col-6 text-end">
              <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal"> Close </button>
              <button type="submit" class="btn btn-primary" id="btn-save-event"> Save </button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- end modal-content--> 
  </div>
  <!-- end modal dialog--> 
</div>

<!-- Create Group Modal -->
<div class="modal fade" id="createGoupModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Create Group</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <div class="col-md-3 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">Group Name</label>
          <input type="text" class="form-control" id="validationDefault01" value="Group Name" required>
        </div>
        
        
          
           <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
              <label for="signed-waivers" class="form-label">Signed Waivers</label>
          <div class="table-responsive table-centered">
                <table class="table text-nowrap mb-0">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      
                      <th class="border-0 py-2"> Member <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Email <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Age <i class='bx bx-expand-vertical'></i> </th>
                      
                      <th class="border-0 py-2 text-end"> Edit/Print </th>
                    </tr>
                  </thead>
                  <!-- end thead-->
                  <tbody>
                    <tr>
                      
                      
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Booker Email | Booker Phone" >Sean Kemper</span></h5>
                          </div>
                        </div></td>
                        <td>email@email.com</td>
                      <td>24</td>
                      
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editBookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class='bx bx-trash fs-16'></i></button></td>
                    </tr>
                    <tr>
                      
                      
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Booker Email | Booker Phone" >Sophia Davis </span></h5>
                          </div>
                        </div></td>
                        <td>email@email.com</td>
                      <td>18</td>
                      
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editBookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class='bx bx-trash fs-16'></i></button></td>
                    </tr>
                    <tr>
                      
                      
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Booker Email | Booker Phone" >Dave Mathews</span></h5>
                          </div>
                        </div></td>
                        <td>email@email.com</td>
                      <td>34</td>
                      
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editBookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class='bx bx-trash fs-16'></i></button></td>
                    </tr>
                  </tbody>
                  <!-- end tbody -->
                </table>
                <!-- end table --> 
              </div>
              
              
              <div class="row align-items-center">
                  <label for="example-textarea" class="form-label">Add Members / Signed Waivers</label>
                  <div class="col-3"><div class="search-bar"> <span><i class="bx bx-search-alt"></i></span>          
                <select class="form-control" id="choices-single-no-sorting" name="choices-single-no-sorting" data-choices data-choices-sorting-false>
                    <option value="attentee">{Name}</option>
                    <option value="attentee">{Name}</option>
                    <option value="attentee">{Name}</option>
                    <option value="attentee">{Name}</option>
                </select>
        </div>
      </div>
        <div class="col-1"><button type="button" class="btn btn-sm btn-primary" id="btn-add-member" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Member"> <i class="bx bx-plus fs-18"></i></button></div></div>
              
              
              </div>
           
         
              <div id="discounted-addons-container-group1">
            <div class="row g-3 mb-3 discount-addon-row">
              <div class="col-md-3 form-group offset-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Items available at discount for this group">
                <label for="payment-status" class="form-label">Assign Discounted Add-ons</label>
                <select class="form-control discount-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                  <option value="">Field Fee</option>
                  <option value="">Paint</option>
                  <option value="">Rental Packages</option>
                  <option value="">Mask</option>
                  <option value="">Grenade + $12.00</option>
                  <option value="">Upgraded Gun package + $100.00</option>
                </select>
              </div>   
              <div class="col-md-2 form-group mb-3" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Discount Percentage" data-bs-content="Discount percentage for this group">
                <label for="discountPercentGroup1" class="form-label">% Discount</label>
                <div class="input-group">
                  <span class="input-group-text">%</span>
                  <input type="number" class="form-control" id="discountPercentGroup1" 
                         min="0" max="100" step="1" 
                         placeholder="0" 
                         title="Please enter a valid discount percentage (e.g., 10)" 
                         required>
                </div>
              </div>
              <div class="col-md-2 mb-3">  
                <label for="discountAmountGroup1" class="form-label">$ Discount</label>
                <div class="input-group">
                  <span class="input-group-text">$</span>
                  <input type="number" class="form-control price-field" id="discountAmountGroup1" 
                         min="0.01" max="999.99" step="0.01" 
                         placeholder="0.00" 
                         pattern="^\d+(\.\d{1,2})?$" 
                         title="Please enter a valid discount amount (e.g., 10.00)" 
                         required>
                </div> 
              </div>
              <div class="col-md-1 d-flex align-items-end align-items-center">
                <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeDiscountAddonRowGroup1(this)" title="Remove this discount add-on"></i>
                <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addDiscountAddonRowGroup1()" title="Add another discount add-on"></i>
              </div>
            </div>
          </div>    
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Admin Group Notes</label>
            <textarea class="form-control" id="example-textarea" rows="5"></textarea>
          </div>
        </div>
        
      </div>
      <div class="modal-footer">        
         
            <div class="form-check form-switch">
                <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Enabled" data-bs-content="Enable / disable group discount" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
              
              <label class="form-check-label" for="invalidCheck2">Enabled</label>
            </div>
            <button type="button" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
          
         
      </div>
    </div>
  </div>
</div>
</div>
<!-- Edit Group Modal -->
<div class="modal fade" id="editGoupModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">{Group Name}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <div class="col-md-3 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">Group Name</label>
          <input type="text" class="form-control" id="validationDefault01" value="Group Name" required>
        </div>
        
        
           <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
              <label for="signed-waivers" class="form-label">Signed Waivers</label>
          <div class="table-responsive table-centered">
                <table class="table text-nowrap mb-0">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      
                      <th class="border-0 py-2"> Member <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Email <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Age <i class='bx bx-expand-vertical'></i> </th>
                      
                      <th class="border-0 py-2 text-end"> Edit/Print </th>
                    </tr>
                  </thead>
                  <!-- end thead-->
                  <tbody>
                    <tr>
                      
                      
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Booker Email | Booker Phone" >Sean Kemper</span></h5>
                          </div>
                        </div></td>
                        <td>email@email.com</td>
                      <td>24</td>
                      
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editBookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class='bx bx-trash fs-16'></i></button></td>
                    </tr>
                    <tr>
                      
                      
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Booker Email | Booker Phone" >Sophia Davis </span></h5>
                          </div>
                        </div></td>
                        <td>email@email.com</td>
                      <td>18</td>
                      
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editBookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class='bx bx-trash fs-16'></i></button></td>
                    </tr>
                    <tr>
                      
                      
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Booker Email | Booker Phone" >Dave Mathews</span></h5>
                          </div>
                        </div></td>
                        <td>email@email.com</td>
                      <td>34</td>
                      
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editBookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class='bx bx-trash fs-16'></i></button></td>
                    </tr>
                  </tbody>
                  <!-- end tbody -->
                </table>
                <!-- end table --> 
              </div>
              
              
              <div class="row align-items-center">
                  <label for="example-textarea" class="form-label">Add Members / Signed Waivers</label>
                  <div class="col-3"><div class="search-bar"> <span><i class="bx bx-search-alt"></i></span>
                  <select class="form-control" id="choices-single-no-sorting" name="choices-single-no-sorting" data-choices data-choices-sorting-false>
                    <option value="attentee">{Name}</option>
                    <option value="attentee">{Name}</option>
                    <option value="attentee">{Name}</option>
                    <option value="attentee">{Name}</option>
                </select>
        </div></div><div class="col-1"><button type="button" class="btn btn-sm btn-primary" id="btn-add-member" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Member"> <i class="bx bx-plus fs-18"></i></button></div></div>
              
              
              </div>
           
          <div id="discounted-addons-container-group2">
            <div class="row g-3 mb-3 discount-addon-row">
              <div class="col-md-3 form-group offset-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Items available at discount for this group">
                <label for="payment-status" class="form-label">Assign Discounted Add-ons</label>
                <select class="form-control discount-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                  <option value="">Field Fee</option>
                  <option value="">Paint</option>
                  <option value="">Rental Packages</option>
                  <option value="">Mask</option>
                  <option value="">Grenade + $12.00</option>
                  <option value="">Upgraded Gun package + $100.00</option>
                </select>
              </div>   
              <div class="col-md-2 form-group mb-3" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Discount Percentage" data-bs-content="Discount percentage for this group">
                <label for="discountPercentGroup2" class="form-label">% Discount</label>
                <div class="input-group">
                  <span class="input-group-text">%</span>
                  <input type="number" class="form-control" id="discountPercentGroup2" 
                         min="0" max="100" step="1" 
                         placeholder="0" 
                         title="Please enter a valid discount percentage (e.g., 10)" 
                         required>
                </div>
              </div>
              <div class="col-md-2 mb-3">  
                <label for="discountAmountGroup2" class="form-label">$ Discount</label>
                <div class="input-group">
                  <span class="input-group-text">$</span>
                  <input type="number" class="form-control price-field" id="discountAmountGroup2" 
                         min="0.01" max="999.99" step="0.01" 
                         placeholder="0.00" 
                         pattern="^\d+(\.\d{1,2})?$" 
                         title="Please enter a valid discount amount (e.g., 10.00)" 
                         required>
                </div> 
              </div>
              <div class="col-md-1 d-flex align-items-end align-items-center">
                <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeDiscountAddonRowGroup2(this)" title="Remove this discount add-on"></i>
                <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addDiscountAddonRowGroup2()" title="Add another discount add-on"></i>
              </div>
            </div>
          </div>
         
             
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Admin Group Notes</label>
            <textarea class="form-control" id="example-textarea" rows="5"></textarea>
          </div>
        </div>
        <div class="row mb-3 text-end">
          <div class="col-md-1 offset-md-1">
            
          </div>
           
            
        </div>
      </div>
      <div class="modal-footer">        
         <div class="col-md-1 mb-3">
                <div class="form-check form-switch">
                <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Enable / disable group discount" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
              
              <label class="form-check-label" for="invalidCheck2">Enabled</label>
            </div>
            </div>
            <div class="col-md-3 mb-3">
            <button type="button" class="btn btn-primary">Save</button> <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">Delete <i class='bx bx-trash fs-16'></i></button> <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
          
          </div> 
      </div>
    </div>
  </div>
</div>
</div>
<!-- Update Image Modal -->
<div class="modal fade" id="updateImageModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">{Package Title} Featured Image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">   
        <div class="row mb-3">
          <div class="col-md-10 mb-3 offset-md-1">
            
            <ul class="list-unstyled mb-0" id="dropzone-preview">
              <li class="mt-2" id="dropzone-preview-list"> 
                
                <div class="border rounded">
                  <div class="d-flex p-2">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-sm bg-light rounded"> <img data-dz-thumbnail class="img-fluid rounded d-block" src="assets/images/placeholder-img.png" alt="Dropzone-Image" /> </div>
                    </div>
                    <div class="flex-grow-1">
                      <div class="pt-1">
                        <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                        <p class="fs-13 text-muted mb-0" data-dz-size></p>
                        <strong class="error text-danger" data-dz-errormessage></strong> </div>
                    </div>
                    <div class="flex-shrink-0 ms-3">
                      <button data-dz-remove class="btn btn-sm btn-light">Change</button>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
              <div class="dropzone">
              <div class="fallback">
                <input name="file" type="file" multiple="multiple">
              </div>
              <div class="dz-message needsclick"> <i class="h1 bx bx-cloud-upload"></i>
                <h3>Upload Featured Image</h3>
                <span class="text-muted fs-13"> Image Requirements: minimum size 500x500 </span> </div>
            </div>
            <!-- end dropzon-preview --> 
          </div>
        </div>
        
        
            
        
       
        
      </div>
      <div class="modal-footer">        
      
            <button type="button" class="btn btn-primary">Save</button>
            <!-- <button type="button" class="btn btn-danger">Delete Booking</button>--> 
         
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Embed Code MODAL -->
<div class="modal fade" id="embedCodeModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="needs-validation" name="event-form" id="forms-event" novalidate>
      <div class="modal-header p-3 border-bottom-0">
        <h5 class="modal-title" id="modal-title">{Package Title} Embed Code</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-3 pb-3 pt-0">
        <div class="row">
          <div class="col">
            <div class="mb-3">
              <label for="example-textarea" class="form-label">Place this code into your HTML</label>
              <textarea class="form-control" id="example-textarea" rows="5" placeholder="<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;">
              <iframe src="https://www.youtube.com/embed/mDFBTdToRmw?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"></iframe>
            </div>
            
            </textarea>
          </div>
        </div>       
      </div>
      <div class="row">
        <div class="col-12 text-end">
        <button type="button" class="btn btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Embed Code"><i class='bx bx-copy'></i></button><button type="button" class="btn btn-light me-1" data-bs-dismiss="modal"> Close </button>
        </div>
      </div>
      </div>
    </form>
  </div>
  <!-- end modal-content--> 
</div>
<!-- end modal dialog-->
</div>

<!-- Delete MODAL -->
<div class="modal fade" id="deleteModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="needs-validation" name="event-form" id="forms-event" novalidate>
      <div class="modal-header p-3 border-bottom-0">
        <h5 class="modal-title" id="modal-title">Confirm Deletion of {Item Name}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-3 pb-3 pt-0">       
      <div class="row">
        <div class="col-12 text-end">
          <button type="button" class="btn btn-soft-danger me-1" data-bs-dismiss="modal"> Delete <i class="bx bx-trash fs-16"></i></button> <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal"> Close </button>
        </div>
      </div>
      </div>
    </form>
  </div>
  <!-- end modal-content--> 
</div>
<!-- end modal dialog-->
</div>
<!-- Live Embed Waiver Modal -->
<div class="modal fade" id="liveWaiverModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">{Park Name} Waiver</h5>
      </div>
      <div class="modal-body">
        <div class="col-md-10 offset-md-1">
        <img class="waiver-logo img-fluid" src="assets/images/your-logo.png"/>
        <h2 class="" id="Label"> Are You a Returning Visitor? </h2>
        <p><strong>Please search your email or phone number to renew your waiver</strong></p>
        <div class="search-bar"> <span><i class="bx bx-search-alt"></i></span>
          <input type="search" class="form-control" id="search" placeholder="Email or Phone" />
        </div>
        <table class="table table-striped table-hover">
          <tbody>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Date Of Birth</th>
              <th>Signed Date</th>
              <th>Click to Renew</th>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td ng-if="userId != 18939" class="ng-binding ng-scope">2</td>
              <td>{Full Name}</td>
              <td>Dec 17, 1974</td>
              <td>Jul 15, 2022</td>
              <td><a ><i class='bx bx-check-square'></i> Renew</a></td>
            </tr>
            <tr>
              <td ng-if="userId != 18939" class="ng-binding ng-scope">2</td>
              <td>{Full Name}</td>
              <td>Dec 17, 1974</td>
              <td>Jul 15, 2022</td>
              <td><a ><i class='bx bx-check-square'></i> Renew</a></td>
            </tr>
            <tr>
              <td ng-if="userId != 18939" class="ng-binding ng-scope">2</td>
              <td>{Full Name}</td>
              <td>Dec 17, 1974</td>
              <td>Jul 15, 2022</td>
              <td><a ><i class='bx bx-check-square'></i> Renew</a></td>
            </tr>
          </tbody>
        </table>
        <h2 class="mt-10">RELEASE OF LIABILITY AND INDEMNITY AGREEMENT</h2>
        <h2>{Park or Company Name}</h2>
        <p>{Waiver HTML Body pulled from the company's waiver editor data}</p>
        <form class="row g-4">
          <label for="validationDefault01" class="form-label">Participant</label>
          <div class="col-md-4">
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationDefault01" value="First Name" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationDefault02" value="Last Name" required>
          </div>
          <div class="col-md-2">
            <label for="validationDefaultUsername" class="form-label">Date of Birth</label>
            <div class="input-group">
              <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000">
              <span class="fs-13 text-muted">e.g "MM/DD/YYYY"</span> </div>
          </div>
          <div class="col-md-12">
            <label for="validationDefault03" class="form-label">Address</label>
            <input type="text" class="form-control" id="validationDefault03" required>
          </div>
          <div class="col-md-6">
            <label for="validationDefault03" class="form-label">City</label>
            <input type="text" class="form-control" id="validationDefault03" required>
          </div>
          <div class="col-md-3">
            <label for="validationDefault04" class="form-label">State</label>
            <select class="form-select" id="validationDefault04" required>
              <option selected disabled value="">Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="validationDefault05" class="form-label">Zip</label>
            <input type="text" class="form-control" id="validationDefault05" required>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Telephone with Code Area</label>
            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(00) 0000-0000">
            <span class="fs-13 text-muted">e.g "(xx) xxxx-xxxx"</span> </div>
          <div class="col-md-6 mb-3">
            <label for="example-email" class="form-label">Email</label>
            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Are you with a group?</label>
            <select class="form-control" data-choices name="choices-single-default" id="choices-single-default" required data-choices-search-placeholder="Search here for your group" data-placeholder="Yes / No">
                <option value="No">No</option>
                <option value="Choice 1">Searched Group Results</option>
                <option value="Choice 1">Searched Group Results</option>
                <option value="Choice 1">Searched Group Results</option>
            </select>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required checked>
              <label class="form-check-label" for="invalidCheck2"> Agree to terms and conditions </label>
            </div>
          </div>
          <div class="col-12 signatures">
            <label>Signature of Participant<span class="requiredRed" >*</span></label>
            <div class="signature-pad-container" id="participantSignaturePadContainer">
              <canvas class="signature-pad" id="participantSignaturePad"></canvas>
              <div class="signature-placeholder">Click to sign</div>
            </div>
            <div class="signature-buttons">
              <button class="signature-btn signature-btn-clear" id="participantClearBtn" disabled data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reset signature field"><i class="bx bx-refresh"></i></button>
            </div>
            <div class="signature-status" id="participantSignatureStatus"></div>
          </div>
          <div class="col-12 signatures">
            <label>Signature of Parent/Guardian (if less than 18 years old)</label>
            <div class="signature-pad-container" id="guardianSignaturePadContainer">
              <canvas class="signature-pad" id="guardianSignaturePad"></canvas>
              <div class="signature-placeholder">Click to sign</div>
            </div>
            <div class="signature-buttons">
              <button class="signature-btn signature-btn-clear" id="guardianClearBtn" disabled data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reset signature field"><i class="bx bx-refresh"></i></button>
            </div>
            <div class="signature-status" id="guardianSignatureStatus"></div>
          </div>
          <div class="col-md-8">
            <label for="validationDefaultUsername" class="form-label">Today's Date</label>
            <div class="row">
              <div class="col-md-6">
                <div class="form-control-plaintext fw-medium" id="todaysDateDisplay"></div>
              </div>
            </div>
          </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
<!-- Edit View User Waiver Modal -->
<div class="modal fade" id="userWaiverModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">{Attendee Name's} Waiver</h5>
      </div>
      <div class="modal-body">
        <div class="col-md-10 offset-md-1">       
        <label for="validationDefault01" class="form-label">{Attendee Name's} Previous Waivers</label>
        <table class="table table-striped table-hover">
          <tbody>
            <tr>
              <th>Id</th>
              <th>Group</th>
              <th>Age</th>
              <th class="text-end">Signed Date</th>
            
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td ng-if="userId != 18939" class="ng-binding ng-scope">2</td>
              <td>{Group Name}</td>
              <td>18</td>
              <td class="text-end">Jul 15, 2022</td>
             
            </tr>
            <tr>
              <td ng-if="userId != 18939" class="ng-binding ng-scope">2</td>
              <td>{Group Name}</td>
              <td>17</td>
              <td class="text-end">Jul 15, 2022</td>
             
            </tr>
            <tr>
              <td ng-if="userId != 18939" class="ng-binding ng-scope">2</td>
              <td>{Group Name}</td>
              <td>17</td>
              <td class="text-end">Jul 15, 2022</td>
              
            </tr>
          </tbody>
        </table>
        
        <form class="row g-4">         
          <div class="col-md-4">
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationDefault01" value="First Name" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationDefault02" value="Last Name" required>
          </div>
          <div class="col-md-2">
            <label for="validationDefaultUsername" class="form-label">Date of Birth</label>
            <div class="input-group">
              <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000">
              <span class="fs-13 text-muted">e.g "MM/DD/YYYY"</span> </div>
          </div>
          <div class="col-md-12">
            <label for="validationDefault03" class="form-label">Address</label>
            <input type="text" class="form-control" id="validationDefault03" required>
          </div>
          <div class="col-md-6">
            <label for="validationDefault03" class="form-label">City</label>
            <input type="text" class="form-control" id="validationDefault03" required>
          </div>
          <div class="col-md-3">
            <label for="validationDefault04" class="form-label">State</label>
            <select class="form-select" id="validationDefault04" required>
              <option selected disabled value="">Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="validationDefault05" class="form-label">Zip</label>
            <input type="text" class="form-control" id="validationDefault05" required>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Telephone with Code Area</label>
            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(00) 0000-0000">
            <span class="fs-13 text-muted">e.g "(xx) xxxx-xxxx"</span> </div>
          <div class="col-md-6 mb-3">
            <label for="example-email" class="form-label">Email</label>
            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
          </div> 
          <div class="row g-3 mb-3">
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="registerBookingMailingListCheckbox" name="registerBookingMailingListCheckbox" checked data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Marketing Mailing List" data-bs-content="This will add the booker to any marketing mailing lists.">
              <label class="form-check-label" for="registerBookingMailingListCheckbox">
                Sign me up for the mailing list
              </label>
            </div>
          </div>
        </div>                  
          <div class="col-12 signatures">
            <label>Signature of Participant<span class="requiredRed" >*</span></label>
            <div class="signature-pad-container" id="userParticipantSignaturePadContainer">
              <canvas class="signature-pad" id="userParticipantSignaturePad"></canvas>
              <div class="signature-placeholder">Click to sign</div>
            </div>
            <div class="signature-buttons">
              <button class="signature-btn signature-btn-clear" id="userParticipantClearBtn" disabled data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reset signature field"><i class="bx bx-refresh"></i></button>
            </div>
            <div class="signature-status" id="userParticipantSignatureStatus"></div>
          </div>
          <div class="col-12 signatures">
            <label>Signature of Parent/Guardian (if less than 18 years old)</label>
            <div class="signature-pad-container" id="userGuardianSignaturePadContainer">
              <canvas class="signature-pad" id="userGuardianSignaturePad"></canvas>
              <div class="signature-placeholder">Click to sign</div>
            </div>
            <div class="signature-buttons">
              <button class="signature-btn signature-btn-clear" id="userGuardianClearBtn" disabled data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reset signature field"><i class="bx bx-refresh"></i></button>
            </div>
            <div class="signature-status" id="userGuardianSignatureStatus"></div>
          </div>          
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Notes Modal -->
<div class="modal fade" id="notesModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Notes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">        
        <div class="row">
          <div class="col-md-10 mb-3">
            <label for="example-textarea" class="form-label">Admin Notes</label>
            <textarea class="form-control" id="example-textarea" rows="5"></textarea>
          </div>
        </div>  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Notes Modal -->
<div class="modal fade" id="bookingNotesModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Notes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="" id="Label">
        Booking Notes
        </h5>
        <strong>{Notes added by booker upon registration} </strong><br>
        <br>
        <br>
        <div class="row">
          <div class="col-md-10 mb-3">
            <label for="example-textarea" class="form-label">Admin Notes</label>
            <textarea class="form-control" id="example-textarea" rows="5"></textarea>
          </div>
        </div>  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Edit Waiver Modal -->
<div class="modal fade" id="editWaiverModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Edit Waiver</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <form>
          <div class="row">
            <div class="col-md-10 mb-3 offset-md-1">
              <label for="main content" class="form-label">Main Waiver Content - Double click or select text to edit styles.</label>
              
              <!-- Bubble Editors -->
              <div id="bubble-editor" style="height: 800px;">
                <h3><span class="ql-size-large">Heading</span></h3>
                <p><br>
                </p>
                <h3>Sub heading</h3>
                <p><br>
                </p>
                <ul>
                  <li>List Item 1</li>
                  <li>List Item 2</li>
                </ul>
                <p><br>
                </p>
                <p>Content body.</p>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary pull-right">Save</button>
        <button type="button" class="btn  btn-soft-secondary" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-title="Print"> <i class='bx bx-printer fs-16'></i></button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Assign to Group Modal -->
<div class="modal fade" id="groupAssignModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Assign Attendees to Group</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-md-4 mb-3">
          <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
            <option value="">Search Group</option>
            <option value="Choice 1">Searched Group Results</option>
            <option value="Choice 1">Searched Group Results</option>
            <option value="Choice 1">Searched Group Results</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Assign</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Check-in Modal -->
<div class="modal fade" id="checkInModal" tabindex="-1" aria-labelledby="checkInModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="checkInModalLabel">Manual Check-in</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">{Group or Attendee Name}</label>
          <p><strong><span id="memberNameDisplay"></span></strong></p>
        </div>
        <div class="mb-3">
          <label for="checkInDate" class="form-label">Select Check-in Date:</label>
          <input type="text" class="form-control" id="checkInDate" placeholder="Select date">
        </div>
        <div class="mb-3">
          <p class="text-muted">Select a date to manually check in this member. You can choose today's date or a past date.</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="checkInToday">Check-in Today</button>
        <button type="button" class="btn btn-success" id="checkInSelected">Check-in Selected Date</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<script>
// Discount field mutual reset functionality
document.addEventListener('DOMContentLoaded', function() {
    // Helper function to check if field is a gift certificate field
    function isGiftCertificateField(element) {
        return element.id === 'giftCertPrice' || element.id === 'giftCertAmount' || 
               element.id === 'createGiftCertPrice' || element.id === 'createGiftCertAmount' ||
               element.closest('#editGiftCertModal') !== null ||
               element.closest('#createGiftCertModal') !== null;
    }
    
    // Function to handle discount field mutual reset using row-based logic
    function handleDiscountFieldReset() {
        // Use event delegation to handle both existing and dynamically added discount fields
        const events = ['input', 'change', 'keyup', 'paste'];
        
        events.forEach(eventType => {
            document.addEventListener(eventType, function(e) {
                const target = e.target;
                
                // ABSOLUTE EARLY EXIT for any gift certificate fields - this overrides everything else
                if (target.id && (target.id.includes('giftCert') || target.id.includes('GiftCert'))) {
                    return;
                }
                
                // Skip gift certificate fields entirely - multiple checks for safety
                if (isGiftCertificateField(target)) {
                    return;
                }
                
                // Additional safety checks for gift certificate modals
                if (target.closest('#editGiftCertModal') || target.closest('#createGiftCertModal')) {
                    return;
                }
                
                // Extra safety check for specific create modal field IDs
                if (target.id === 'createGiftCertPrice' || target.id === 'createGiftCertAmount') {
                    return;
                }
                
                // Check if the input is a percentage discount/deposit field
                if (target.id && (target.id.includes('discountPercent') || target.id.includes('discountPercentMembership') || target.id.includes('depositPercent'))) {
                    const row = target.closest('.discount-addon-row') || target.closest('.row');
                    if (row) {
                        const amountField = row.querySelector('[id*="discountAmount"], [id*="depositAmount"]');
                        if (amountField && !isGiftCertificateField(amountField) && target.value !== '' && target.value !== '0') {
                            amountField.value = '0';
                            amountField.classList.remove('is-invalid');
                        }
                    }
                }
                // Check if the input is a dollar amount discount/deposit field
                else if (target.id && (target.id.includes('discountAmount') || target.id.includes('discountAmountMembership') || target.id.includes('depositAmount'))) {
                    const row = target.closest('.discount-addon-row') || target.closest('.row');
                    if (row) {
                        const percentField = row.querySelector('[id*="discountPercent"], [id*="depositPercent"]');
                        if (percentField && !isGiftCertificateField(percentField) && target.value !== '' && target.value !== '0' && target.value !== '0.00') {
                            percentField.value = '0';
                            percentField.classList.remove('is-invalid');
                        }
                    }
                }
                // Handle fields that might use class-based identification
                else if (target.type === 'number' && !isGiftCertificateField(target)) {
                    const row = target.closest('.discount-addon-row') || target.closest('.row');
                    if (row) {
                        const isPercentField = target.parentElement.querySelector('.input-group-text')?.textContent.includes('%');
                        const isDollarField = target.parentElement.querySelector('.input-group-text')?.textContent.includes('$');
                        
                        if (isPercentField && target.value !== '' && target.value !== '0') {
                            const amountField = row.querySelector('input[type="number"]:not([id*="discountPercent"]):not([id*="discountPercentMembership"]):not([id*="depositPercent"]):not([id="giftCertPrice"]):not([id="giftCertAmount"]):not([id="createGiftCertPrice"]):not([id="createGiftCertAmount"])');
                            if (amountField && amountField !== target && !isGiftCertificateField(amountField)) {
                                amountField.value = '0';
                                amountField.classList.remove('is-invalid');
                            }
                        } else if (isDollarField && target.value !== '' && target.value !== '0' && target.value !== '0.00') {
                            const percentField = row.querySelector('input[type="number"]:not([id*="discountAmount"]):not([id*="discountAmountMembership"]):not([id*="depositAmount"]):not([id="giftCertPrice"]):not([id="giftCertAmount"]):not([id="createGiftCertPrice"]):not([id="createGiftCertAmount"])');
                            if (percentField && percentField !== target && !isGiftCertificateField(percentField)) {
                                percentField.value = '0';
                                percentField.classList.remove('is-invalid');
                            }
                        }
                    }
                }
            });
        });
    }
    
    // Initialize discount field handling
    handleDiscountFieldReset();
    
    // Additional specific handling for known discount field pairs
    function setupKnownDiscountPairs() {
        const knownPairs = [
            ['discountPercentGroup1', 'discountAmountGroup1'],
            ['discountPercentGroup2', 'discountAmountGroup2'],
            ['discountPercentMembership1', 'discountAmountMembership1'],
            ['newDiscountPercentMembership1', 'newDiscountAmountMembership1'],
            ['depositPercentPackage', 'depositAmountPackage']
        ];
        
        knownPairs.forEach(([percentId, amountId]) => {
            const percentField = document.getElementById(percentId);
            const amountField = document.getElementById(amountId);
            
            // Skip if either field is a gift certificate field
            if ((percentField && isGiftCertificateField(percentField)) || 
                (amountField && isGiftCertificateField(amountField))) {
                return;
            }
            
            if (percentField && amountField) {
                const events = ['input', 'change', 'keyup', 'paste'];
                
                events.forEach(event => {
                    percentField.addEventListener(event, function() {
                        // Double-check before modifying
                        if (isGiftCertificateField(amountField)) return;
                        
                        if (this.value !== '' && this.value !== '0') {
                            amountField.value = '0';
                            amountField.classList.remove('is-invalid');
                        }
                    });
                    
                    amountField.addEventListener(event, function() {
                        // Double-check before modifying
                        if (isGiftCertificateField(percentField)) return;
                        
                        if (this.value !== '' && this.value !== '0' && this.value !== '0.00') {
                            percentField.value = '0';
                            percentField.classList.remove('is-invalid');
                        }
                    });
                });
            }
        });
    }
    
    // Set up known pairs
    setupKnownDiscountPairs();
});
</script>

<!-- Quill Editor JS -->
<script src="assets/vendor/quill/quill.js"></script>
<script>
// Copy functionality for embed code modal
function initializeModalCopyFunctionality() {
    // Get the embed code modal
    const embedModal = document.getElementById('embedCodeModal');
    if (!embedModal) return;
    
    // Find the copy button in the modal
    const copyButton = embedModal.querySelector('[data-bs-title="Copy Embed Code"]');
    if (!copyButton) return;
    
    // Remove any existing event listeners to prevent duplicates
    copyButton.removeEventListener('click', handleModalCopy);
    
    // Add click event listener for copy functionality
    copyButton.addEventListener('click', handleModalCopy);
}

function handleModalCopy(event) {
    event.preventDefault();
    
    const button = event.currentTarget;
    const modal = button.closest('.modal');
    const textarea = modal.querySelector('textarea');
    
    if (!textarea) {
        console.error('Textarea not found in modal');
        return;
    }
    
    const textToCopy = textarea.value || textarea.textContent;
    
    if (!textToCopy.trim()) {
        showModalCopyFeedback(button, 'error', 'No content to copy');
        return;
    }
    
    // Try modern clipboard API first
    if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(textToCopy).then(function() {
            showModalCopyFeedback(button, 'success', 'Copied!');
        }).catch(function(err) {
            console.error('Clipboard API failed:', err);
            fallbackCopyModal(textToCopy, button);
        });
    } else {
        // Fallback for older browsers
        fallbackCopyModal(textToCopy, button);
    }
}

function fallbackCopyModal(text, button) {
    try {
        // Create temporary textarea
        const tempTextarea = document.createElement('textarea');
        tempTextarea.value = text;
        tempTextarea.style.position = 'fixed';
        tempTextarea.style.left = '-9999px';
        tempTextarea.style.top = '-9999px';
        document.body.appendChild(tempTextarea);
        
        // Select and copy
        tempTextarea.focus();
        tempTextarea.select();
        
        const successful = document.execCommand('copy');
        document.body.removeChild(tempTextarea);
        
        if (successful) {
            showModalCopyFeedback(button, 'success', 'Copied!');
        } else {
            showModalCopyFeedback(button, 'error', 'Copy failed');
        }
    } catch (err) {
        console.error('Fallback copy failed:', err);
        showModalCopyFeedback(button, 'error', 'Copy failed');
    }
}

function showModalCopyFeedback(button, type, message) {
    const originalIcon = button.innerHTML;
    const originalTooltip = button.getAttribute('data-bs-title');
    
    // Update button appearance based on result
    if (type === 'success') {
        button.innerHTML = '<i class="bx bx-check"></i>';
        button.className = button.className.replace('btn-soft-secondary', 'btn-soft-success');
        button.setAttribute('data-bs-title', message);
    } else {
        button.innerHTML = '<i class="bx bx-x"></i>';
        button.className = button.className.replace('btn-soft-secondary', 'btn-soft-danger');
        button.setAttribute('data-bs-title', message);
    }
    
    // Reset after 2 seconds
    setTimeout(function() {
        button.innerHTML = originalIcon;
        button.className = button.className.replace('btn-soft-success', 'btn-soft-secondary').replace('btn-soft-danger', 'btn-soft-secondary');
        button.setAttribute('data-bs-title', originalTooltip);
    }, 2000);
}

// Initialize Quill Editors
let bubbleEditorInstance = null;
let snowEditorInstance = null;

function initializeBubbleEditor() {
    const bubbleEditor = document.getElementById('bubble-editor');
    if (bubbleEditor && !bubbleEditorInstance) {
        try {
            bubbleEditorInstance = new Quill('#bubble-editor', {
                theme: 'bubble',
                placeholder: 'Click here to edit waiver content...',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline', 'strike'],
                        ['blockquote', 'code-block'],
                        [{ 'header': 1 }, { 'header': 2 }],
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        [{ 'script': 'sub'}, { 'script': 'super' }],
                        [{ 'indent': '-1'}, { 'indent': '+1' }],
                        ['link', 'image'],
                        ['clean']
                    ]
                }
            });
            console.log('Bubble editor initialized successfully');
        } catch (error) {
            console.error('Error initializing bubble editor:', error);
        }
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Initialize modal copy functionality
    initializeModalCopyFunctionality();
    
    // Initialize copy functionality when embed modal is shown
    const embedModal = document.getElementById('embedCodeModal');
    if (embedModal) {
        embedModal.addEventListener('shown.bs.modal', function() {
            // Re-initialize copy functionality to handle dynamic content
            setTimeout(initializeModalCopyFunctionality, 100);
        });
    }
    
    // Initialize Snow Editor if it exists (for regular pages)
    const snowEditor = document.getElementById('snow-editor');
    if (snowEditor && !snowEditorInstance) {
        snowEditorInstance = new Quill('#snow-editor', {
            theme: 'snow',
            modules: {
                'toolbar': [[{ 'font': [] }, { 'size': [] }], ['bold', 'italic', 'underline', 'strike'], [{ 'color': [] }, { 'background': [] }], [{ 'script': 'super' }, { 'script': 'sub' }], [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'], [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }], ['direction', { 'align': [] }], ['link', 'image', 'video'], ['clean']]
            },
        });
    }
    
    // Initialize Create Snow Editor if it exists (for create modal)
    const createSnowEditor = document.getElementById('create-snow-editor');
    if (createSnowEditor) {
        // Check if editor already exists to prevent duplicates
        if (!createSnowEditor.querySelector('.ql-container')) {
            new Quill('#create-snow-editor', {
                theme: 'snow',
                modules: {
                    'toolbar': [[{ 'font': [] }, { 'size': [] }], ['bold', 'italic', 'underline', 'strike'], [{ 'color': [] }, { 'background': [] }], [{ 'script': 'super' }, { 'script': 'sub' }], [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'], [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }], ['direction', { 'align': [] }], ['link', 'image', 'video'], ['clean']]
                },
            });
        }
    }
    
    // Initialize Bubble Editor when modal is shown
    const editWaiverModal = document.getElementById('editWaiverModal');
    if (editWaiverModal) {
        editWaiverModal.addEventListener('shown.bs.modal', function() {
            setTimeout(initializeBubbleEditor, 200);
        });
        
        // Reset editor when modal is hidden
        editWaiverModal.addEventListener('hidden.bs.modal', function() {
            if (bubbleEditorInstance) {
                bubbleEditorInstance = null;
            }
        });
    }
    
    // Initialize Choices.js for Package Settings modal with aggressive overflow fixes
    const eventModal = document.getElementById('event-modal');
    if (eventModal) {
        eventModal.addEventListener('shown.bs.modal', function() {
            // Add delay to ensure modal is fully rendered
            setTimeout(function() {
                const bookableTimesSelect = document.getElementById('bookable-times-select');
                
                if (bookableTimesSelect && typeof Choices !== 'undefined') {
                    // Destroy any existing instance
                    if (bookableTimesSelect.choicesInstance) {
                        try {
                            bookableTimesSelect.choicesInstance.destroy();
                        } catch (e) {
                            console.log('Error destroying previous Choices instance:', e);
                        }
                        bookableTimesSelect.choicesInstance = null;
                    }
                    
                    try {
                        // Initialize Choices.js with simple configuration
                        bookableTimesSelect.choicesInstance = new Choices(bookableTimesSelect, {
                            removeItemButton: true,
                            searchEnabled: false,
                            shouldSort: false,
                            itemSelectText: '',
                            placeholderValue: 'Select bookable times...',
                            position: 'bottom'
                        });
                        
                        console.log('Choices.js initialized successfully for bookable times');
                        
                    } catch (e) {
                        console.error('Error initializing Choices.js:', e);
                    }
                } else {
                    console.error('Bookable times select element or Choices library not found');
                }
            }, 300); // Longer delay for stability
        });
        
        // Clean up when modal is hidden
        eventModal.addEventListener('hidden.bs.modal', function() {
            const bookableTimesSelect = document.getElementById('bookable-times-select');
            if (bookableTimesSelect && bookableTimesSelect.choicesInstance) {
                try {
                    bookableTimesSelect.choicesInstance.destroy();
                    bookableTimesSelect.choicesInstance = null;
                    console.log('Choices.js instance cleaned up');
                } catch (e) {
                    console.error('Error cleaning up Choices.js:', e);
                }
            }
        });
    }
    
    // Also try to initialize bubble editor directly if it exists outside modal
    setTimeout(initializeBubbleEditor, 500);
    
    // Initialize Check-in Date Picker
    const checkInDate = document.getElementById('checkInDate');
    if (checkInDate) {
        flatpickr(checkInDate, {
            dateFormat: "Y-m-d",
            defaultDate: new Date(),
            maxDate: new Date(), // Prevent future dates - only today or past dates for check-ins
            allowInput: true,
            clickOpens: true
        });
    }
    
    // Initialize Signature Pads
    initializeSignaturePads();
});

// Signature Pad Functionality
let signaturePads = {};

function initializeSignaturePads() {
    // Define all signature pad configurations
    const padConfigs = [
        {
            canvasId: 'participantSignaturePad',
            containerId: 'participantSignaturePadContainer',
            clearBtnId: 'participantClearBtn',
            statusId: 'participantSignatureStatus',
            name: 'participant'
        },
        {
            canvasId: 'guardianSignaturePad',
            containerId: 'guardianSignaturePadContainer',
            clearBtnId: 'guardianClearBtn',
            statusId: 'guardianSignatureStatus',
            name: 'guardian'
        },
        {
            canvasId: 'userParticipantSignaturePad',
            containerId: 'userParticipantSignaturePadContainer',
            clearBtnId: 'userParticipantClearBtn',
            statusId: 'userParticipantSignatureStatus',
            name: 'userParticipant'
        },
        {
            canvasId: 'userGuardianSignaturePad',
            containerId: 'userGuardianSignaturePadContainer',
            clearBtnId: 'userGuardianClearBtn',
            statusId: 'userGuardianSignatureStatus',
            name: 'userGuardian'
        }
    ];

    // Initialize each signature pad when its modal is shown
    padConfigs.forEach(config => {
        const canvas = document.getElementById(config.canvasId);
        if (canvas) {
            // Initialize when parent modal is shown
            const modal = canvas.closest('.modal');
            if (modal) {
                modal.addEventListener('shown.bs.modal', function() {
                    setTimeout(() => {
                        initializeSingleSignaturePad(config);
                    }, 200);
                });
                
                // Clean up when modal is hidden
                modal.addEventListener('hidden.bs.modal', function() {
                    if (signaturePads[config.name]) {
                        signaturePads[config.name] = null;
                    }
                });
            }
        }
    });
}

function initializeSingleSignaturePad(config) {
    try {
        const canvas = document.getElementById(config.canvasId);
        const container = document.getElementById(config.containerId);
        const clearBtn = document.getElementById(config.clearBtnId);
        const statusEl = document.getElementById(config.statusId);

        if (!canvas || !container || !clearBtn || !statusEl) {
            console.warn(`Missing elements for signature pad: ${config.name}`);
            return;
        }

        // Skip if already initialized
        if (signaturePads[config.name]) {
            return;
        }

        // Setup canvas dimensions
        const rect = container.getBoundingClientRect();
        canvas.width = rect.width || 400;
        canvas.height = 150;

        // Initialize SignaturePad
        if (typeof SignaturePad === 'undefined') {
            console.error('SignaturePad library not loaded');
            return;
        }

        const signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgba(255, 255, 255, 1)',
            penColor: 'rgb(0, 0, 0)'
        });

        signaturePads[config.name] = signaturePad;

        // Setup event listeners
        signaturePad.addEventListener('beginStroke', function() {
            container.classList.add('signing');
            updateSignaturePadButtons(config, signaturePad);
        });

        signaturePad.addEventListener('endStroke', function() {
            container.classList.remove('signing');
            updateSignaturePadButtons(config, signaturePad);
            if (!signaturePad.isEmpty()) {
                showSignatureStatus(statusEl, 'Signature captured!', 'success');
            }
        });

        // Button events
        clearBtn.addEventListener('click', function() {
            clearSignaturePad(config, signaturePad);
        });

        // Prevent scrolling when drawing on mobile
        canvas.addEventListener('touchstart', preventScroll, { passive: false });
        canvas.addEventListener('touchmove', preventScroll, { passive: false });

        // Handle mouse events
        canvas.addEventListener('mousedown', function() {
            container.classList.add('signing');
        });

        canvas.addEventListener('mouseup', function() {
            container.classList.remove('signing');
        });

        canvas.addEventListener('mouseleave', function() {
            container.classList.remove('signing');
        });

        // Initial button state
        updateSignaturePadButtons(config, signaturePad);

        console.log(`Signature pad initialized: ${config.name}`);

    } catch (error) {
        console.error(`Error initializing signature pad ${config.name}:`, error);
    }
}

function updateSignaturePadButtons(config, signaturePad) {
    const container = document.getElementById(config.containerId);
    const clearBtn = document.getElementById(config.clearBtnId);
    
    if (!container || !clearBtn) return;
    
    const isEmpty = signaturePad.isEmpty();
    clearBtn.disabled = isEmpty;
    
    // Toggle signature state class
    if (isEmpty) {
        container.classList.remove('has-signature');
    } else {
        container.classList.add('has-signature');
    }
}

function clearSignaturePad(config, signaturePad) {
    try {
        signaturePad.clear();
        updateSignaturePadButtons(config, signaturePad);
        
        const statusEl = document.getElementById(config.statusId);
        showSignatureStatus(statusEl, 'Signature cleared.', 'success');
        
        // Auto-hide status after 2 seconds
        setTimeout(() => {
            hideSignatureStatus(statusEl);
        }, 2000);
    } catch (error) {
        console.error('Error clearing signature:', error);
        const statusEl = document.getElementById(config.statusId);
        showSignatureStatus(statusEl, 'Error clearing signature.', 'error');
    }
}



function showSignatureStatus(statusEl, message, type = 'success') {
    if (!statusEl) return;
    
    statusEl.textContent = message;
    statusEl.className = `signature-status ${type} show`;
}

function hideSignatureStatus(statusEl) {
    if (!statusEl) return;
    
    statusEl.classList.remove('show');
}

function preventScroll(event) {
    if (event.target.classList.contains('signature-pad')) {
        event.preventDefault();
    }
}
</script>


<?php include 'partials/main.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
$title = "Home";
include 'partials/title-meta.php'
?>

  <!-- Fullcalendar css -->
  <link href="assets/vendor/fullcalendar/main.min.css" rel="stylesheet" type="text/css" />
  <?php include 'partials/head-css.php' ?>
  

</head>

<body>
<!-- START Wrapper -->
<div class="wrapper">
  <?php include 'partials/menu.php' ?>
  
  <!-- ==================================================== --> 
  <!-- Start right Content here --> 
  <!-- ==================================================== -->
  <div class="page-content">     
    <!-- Start Container -->
    <div class="container-xxl">      
      <div class="row">
        <div class="col">
          <h4>Add-ons</h4>
            <p>Available products and add-ons associated with booking packages. Products can also be purchased stand-alone and reservered by date. (Use embed codes to display stand-alone).</p>
          <div class="card">
            <div class="card-body">             
           </div>
          <!-- end card --> 
              <div class="table-responsive table-centered">
                <table class="table text-nowrap mb-0">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      <th class="" style="width:6%"></th> 
                      <th class="border-0 py-2 menu-arrow" style="width:6%"></th>                        
                      <th class="border-0 py-2"> Add-on <i class='bx bx-expand-vertical'></i> </th>     
                      <th class="border-0 py-2"> Status <i class='bx bx-expand-vertical'></i> </th>
                    <th class="border-0 py-2" style="width:6%"> Inventory <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2 text-end"> Action </th>
                    </tr>
                  </thead>
                  <!-- end thead-->
                  <tbody id="sortable-tbody">
                    <tr class="draggable-row">
                        
                      <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                        <td><a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a></td>
                      <td>Case of Paint</td>
                      
                      <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                        <td>
                          <div class="input-group quantity-selector">
                          <input type="number" id="inputQuantitySelector" class="form-control" aria-live="polite" data-bs-step="counter" name="quantity" title="quantity on hand" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="quantity on hand" value="12" min="0" max="" step="1" data-bs-round="0" aria-label="Quantity selector">
                        </div>
                        </td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editAddonModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="bx bx-edit fs-16"></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New"><i class='bx bx-copy fs-16'></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code"><i class='bx bx-code-alt fs-16'></i></button>
                        <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class='bx bx-trash fs-16'></i></button></td>
                    </tr>
                    <tr class="draggable-row">
                      <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                        <td><a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a></td>
                      <td>Paint Granade</td>
                    
                         
                      <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                        <td>
                          <div class="input-group quantity-selector">
                          <input type="number" id="inputQuantitySelector" class="form-control" aria-live="polite" data-bs-step="counter" name="quantity" title="quantity" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="quantity on hand"value="12" min="0" max="" step="1" data-bs-round="0" aria-label="Quantity selector">
                        </div>
                        </td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editAddonModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="bx bx-edit fs-16"></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New"><i class='bx bx-copy fs-16'></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code"><i class='bx bx-code-alt fs-16'></i></button>
                        <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class='bx bx-trash fs-16'></i></button></td>
                    </tr>
                    <tr class="draggable-row">
                      <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                        <td><a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a></td>
                      <td>Protective Vest</td>
                      
                     <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                        <td>
                          <div class="input-group quantity-selector">
                          <input type="number" id="inputQuantitySelector" class="form-control" aria-live="polite" data-bs-step="counter" name="quantity" title="quantity" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="quantity on hand"value="12" min="0" max="" step="1" data-bs-round="0" aria-label="Quantity selector">
                        </div>
                        </td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editAddonModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New"><i class='bx bx-copy fs-16'></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code"><i class='bx bx-code-alt fs-16'></i></button>
                    <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class='bx bx-trash fs-16'></i></button></td>
                    </tr>
                      <tr class="draggable-row">
                      <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                          <td><a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a></td>
                      <td>Gloves</td>
                      
                      <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                          <td>
                          <div class="input-group quantity-selector">
                          <input type="number" id="inputQuantitySelector" class="form-control" aria-live="polite" data-bs-step="counter" name="quantity" title="quantity" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="quantity on hand" value="12" min="0" max="" step="1" data-bs-round="0" aria-label="Quantity selector">
                        </div>
                        </td>
                      <td class="text-end">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editAddonModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="bx bx-edit fs-16"></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New"><i class='bx bx-copy fs-16'></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code"><i class='bx bx-code-alt fs-16'></i></button>
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class='bx bx-trash fs-16'></i></button>
                          </td> 
                    </tr>
                  </tbody>
                  <!-- end tbody -->
                </table>
                <!-- end table --> 
              </div>
              <!-- table responsive -->
              <div class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top" id="addonsPagination">
                <div class="col-sm">
                  <div class="text-muted" id="addonsShowingText"> Showing <span class="fw-semibold">4</span> of <span class="fw-semibold">4</span> Add-ons </div>
                </div>
                <div class="col-sm-auto mt-3 mt-sm-0">
                  <ul class="pagination pagination-sm m-0" id="addonsPaginationContainer">
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a> </li>
                    <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a> </li>
                  </ul>
                </div>
                 
                <div class="col-sm" style="text-align: right;"> <a data-bs-toggle="modal" data-bs-target="#editAddonModal" href="#" class="btn btn-success"> <i class="bx bx-plus me-1"></i>Create Add-on</a> </div>
              </div>
            
            
        </div>
        <!-- end col --> 
      </div>
      <!-- end row -->                
    </div>
    <!-- End Container -->
    <?php include  'partials/footer.php' ?>
  </div>
  <!-- ==================================================== --> 
  <!-- End Page Content --> 
  <!-- ==================================================== --> 
</div>
<!-- END Wrapper -->

<?php include 'partials/vendor-scripts.php' ?>

<!-- Full Calendar --> 
<script src="assets/vendor/fullcalendar/main.min.js"></script> 
<script>
// Bubble theme and Snow theme editors are initialized in assets/js/components/form-quilljs.js

// Universal price field validation and formatting
document.addEventListener('DOMContentLoaded', function() {
  const priceFields = document.querySelectorAll('.price-field');
  
  priceFields.forEach(function(priceInput) {
    // Format input on blur (when user leaves the field)
    priceInput.addEventListener('blur', function() {
      let value = parseFloat(this.value);
      if (!isNaN(value) && value >= 0) {
        this.value = value.toFixed(2);
        this.classList.remove('is-invalid');
      }
    });

    // Real-time validation on input
    priceInput.addEventListener('input', function() {
      let value = parseFloat(this.value);
      let min = parseFloat(this.getAttribute('min')) || 0;
      let max = parseFloat(this.getAttribute('max')) || 9999.99;
      
      if (this.value === '') {
        this.classList.remove('is-invalid');
        return;
      }
      
      if (isNaN(value) || value < min || value > max) {
        this.classList.add('is-invalid');
      } else {
        this.classList.remove('is-invalid');
      }
    });

    // Prevent non-numeric characters (except decimal point)
    priceInput.addEventListener('keypress', function(e) {
      const char = String.fromCharCode(e.which);
      const currentValue = this.value;
      
      // Allow control keys (backspace, delete, tab, etc.)
      if (e.which < 32 || e.which === 127) return true;
      
      // Allow digits
      if (/\d/.test(char)) return true;
      
      // Allow decimal point only if there isn't one already and it's not the first character
      if (char === '.' && currentValue.indexOf('.') === -1 && currentValue.length > 0) {
        return true;
      }
      
      // Prevent all other characters
      e.preventDefault();
      return false;
    });
  });

  // Drag and Drop functionality for table rows
  function initializeDragAndDrop() {
    const tbody = document.getElementById('sortable-tbody');
    const dragHandles = tbody.querySelectorAll('.drag-handle');
    const rows = tbody.querySelectorAll('.draggable-row');
    let draggedRow = null;
    
    // Add drag event listeners to drag handles
    dragHandles.forEach(handle => {
      // Drag start event
      handle.addEventListener('dragstart', function(e) {
        draggedRow = this.closest('.draggable-row');
        draggedRow.classList.add('dragging');
        e.dataTransfer.effectAllowed = 'move';
        e.dataTransfer.setData('text/html', draggedRow.outerHTML);
      });
      
      // Drag end event
      handle.addEventListener('dragend', function(e) {
        if (draggedRow) {
          draggedRow.classList.remove('dragging');
          draggedRow = null;
        }
        
        // Remove drag-over class from all rows
        tbody.querySelectorAll('.draggable-row').forEach(r => {
          r.classList.remove('drag-over');
        });
      });
    });
    
    // Add drop event listeners to table rows
    rows.forEach(row => {
      // Drag over event
      row.addEventListener('dragover', function(e) {
        e.preventDefault();
        e.dataTransfer.dropEffect = 'move';
        
        if (this !== draggedRow && draggedRow) {
          this.classList.add('drag-over');
        }
      });
      
      // Drag leave event
      row.addEventListener('dragleave', function(e) {
        this.classList.remove('drag-over');
      });
      
      // Drop event
      row.addEventListener('drop', function(e) {
        e.preventDefault();
        
        if (this !== draggedRow && draggedRow) {
          const allRows = Array.from(tbody.querySelectorAll('.draggable-row'));
          const draggedIndex = allRows.indexOf(draggedRow);
          const targetIndex = allRows.indexOf(this);
          
          if (draggedIndex < targetIndex) {
            // Insert after target
            this.parentNode.insertBefore(draggedRow, this.nextSibling);
          } else {
            // Insert before target
            this.parentNode.insertBefore(draggedRow, this);
          }
          
          // Re-initialize drag and drop for the newly ordered rows
          setTimeout(() => {
            initializeDragAndDropEvents();
          }, 100);
        }
        
        this.classList.remove('drag-over');
      });
    });
  }

  // Re-initialize events after reordering
  function initializeDragAndDropEvents() {
    const rows = document.querySelectorAll('#sortable-tbody .draggable-row');
    const handles = document.querySelectorAll('#sortable-tbody .drag-handle');
    
    // Remove existing event listeners by cloning and replacing the nodes
    rows.forEach(row => {
      const newRow = row.cloneNode(true);
      row.parentNode.replaceChild(newRow, row);
    });
    
    // Re-initialize drag and drop
    initializeDragAndDrop();
  }

  // Initialize drag and drop when the page loads
  initializeDragAndDrop();
});

// Package Add-ons table pagination functionality
document.addEventListener('DOMContentLoaded', function() {
    const addonsTable = document.querySelector('.table');
    
    if (!addonsTable) return; // Exit if table not found
    
    const addonsTableBody = addonsTable.querySelector('tbody');
    const allAddonRows = Array.from(addonsTableBody.querySelectorAll('.draggable-row'));
    const itemsPerPage = 10;
    const totalAddonItems = allAddonRows.length;
    const totalAddonPages = Math.ceil(totalAddonItems / itemsPerPage);
    let currentAddonPage = 1;

    // Get pagination elements
    const paginationContainer = document.getElementById('addonsPaginationContainer');
    const addonsShowingTextElement = document.getElementById('addonsShowingText');
    
    // Generate dynamic pagination buttons
    function generateAddonsPagination() {
        if (!paginationContainer) return;
        
        paginationContainer.innerHTML = '';
        
        // Previous button
        const prevLi = document.createElement('li');
        prevLi.className = 'page-item';
        prevLi.innerHTML = '<a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a>';
        paginationContainer.appendChild(prevLi);
        
        // Page number buttons
        for (let i = 1; i <= totalAddonPages; i++) {
            const pageLi = document.createElement('li');
            pageLi.className = 'page-item';
            if (i === 1) pageLi.classList.add('active');
            pageLi.innerHTML = `<a href="#" class="page-link">${i}</a>`;
            paginationContainer.appendChild(pageLi);
        }
        
        // Next button
        const nextLi = document.createElement('li');
        nextLi.className = 'page-item';
        nextLi.innerHTML = '<a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a>';
        paginationContainer.appendChild(nextLi);
        
        // Ensure the container has the correct classes
        paginationContainer.className = 'pagination pagination-sm m-0';
    }
    
    function showAddonPage(page) {
        // Hide all addon rows first
        allAddonRows.forEach(row => {
            row.style.display = 'none';
        });
        
        // Calculate which rows to show
        const startIndex = (page - 1) * itemsPerPage;
        const endIndex = Math.min(startIndex + itemsPerPage, totalAddonItems);
        
        // Show rows for current page
        for (let i = startIndex; i < endIndex; i++) {
            if (allAddonRows[i]) {
                allAddonRows[i].style.display = '';
            }
        }
        
        // Update showing text
        if (addonsShowingTextElement) {
            const itemsShown = endIndex - startIndex;
            addonsShowingTextElement.innerHTML = `Showing <span class="fw-semibold">${itemsShown}</span> of <span class="fw-semibold">${totalAddonItems}</span> Add-ons`;
        }
        
        // Update pagination active state
        updateAddonPaginationState(page);
        
        currentAddonPage = page;
    }
    
    function updateAddonPaginationState(activePage) {
        if (!paginationContainer) return;
        
        const pageItems = paginationContainer.querySelectorAll('.page-item');
        
        pageItems.forEach((item, index) => {
            item.classList.remove('active');
            
            // Skip first (previous arrow) and last (next arrow) items
            if (index > 0 && index < pageItems.length - 1) {
                const pageNum = parseInt(item.querySelector('.page-link').textContent);
                if (pageNum === activePage) {
                    item.classList.add('active');
                }
            }
        });
        
        // Enable/disable navigation arrows
        const prevButton = pageItems[0];
        const nextButton = pageItems[pageItems.length - 1];
        
        if (activePage === 1) {
            prevButton.classList.add('disabled');
        } else {
            prevButton.classList.remove('disabled');
        }
        
        if (activePage === totalAddonPages) {
            nextButton.classList.add('disabled');
        } else {
            nextButton.classList.remove('disabled');
        }
    }
    
    // Add click handlers to pagination links
    if (paginationContainer) {
        paginationContainer.addEventListener('click', function(e) {
            e.preventDefault();
            
            const clickedLink = e.target.closest('.page-link');
            if (!clickedLink) return;
            
            const parentItem = clickedLink.closest('.page-item');
            if (parentItem.classList.contains('disabled')) return;
            
            const linkContent = clickedLink.innerHTML.trim();
            
            if (linkContent.includes('bx-left-arrow-alt')) {
                // Previous button
                if (currentAddonPage > 1) {
                    showAddonPage(currentAddonPage - 1);
                }
            } else if (linkContent.includes('bx-right-arrow-alt')) {
                // Next button
                if (currentAddonPage < totalAddonPages) {
                    showAddonPage(currentAddonPage + 1);
                }
            } else {
                // Page number button
                const pageNum = parseInt(linkContent);
                if (pageNum && pageNum !== currentAddonPage) {
                    showAddonPage(pageNum);
                }
            }
        });
    }
    
    // Initialize pagination and first page
    generateAddonsPagination();
    showAddonPage(1);
});
    
    </script> 
<!-- Page Js --> 
<script src="assets/js/pages/app-calendar.js"></script>
</body>
</html>
<!-- Add-on Modal -->
<div class="modal fade" id="editAddonModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Add-on</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <div class="col-md-3 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">Add-on Title</label>
          <input type="text" class="form-control" id="validationDefault01" value="Add-on Title" required>
        </div>                  
         
        <div class="row mb-5">
                <div class="col-md-5 offset-md-1 align-content-center">
                    <img class="img-fluid rounded " style="display:block; margin:0 auto;" src="assets/images/placeholder-img.png" />               
                </div>
             
              <div class="col-md-5 dropzone">
              <div class="fallback">
                <input name="file" type="file" multiple="multiple">
              </div>
              <div class="dz-message needsclick"><i class="h1 bx bx-cloud-upload"></i>
                <h3>Upload Featured Image</h3>
                <span class="text-muted fs-13">Image Requirements: minimum size 500x500</span></div>
            </div>
            
        </div>
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Description</label>
            <!-- Quill Editors -->
            <div id="snow-editor" style="height: 300px;">
              <h3><span class="ql-size-large">Hello World!</span></h3>
              <p><br>
              </p>
              <h3>This is a simple editable area.</h3>
              <p><br>
              </p>
              <ul>
                <li>Select a text to reveal the toolbar.</li>
                <li>Edit rich document on-the-fly, so elastic!</li>
              </ul>             
              
            </div>
          </div>
        </div>
        
            <div class="row mb-5">            
          <div class="col-md-2 offset-md-1 mb-3">
            <label for="addonPrice" class="form-label">Add-on Price</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="addonPrice" 
                     min="0.00" max="999.99" step="0.01" 
                     placeholder="15.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid price (e.g., 15.00). Enter 0.00 if free" 
                     data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Enter zero if optional free" 
                     required>
            </div>
          </div>            
         
                <div class="col-md-2 mt-3 mb-3">
            <div class="form-check form-check-inline mb-3">
             <input type="checkbox" class="form-check-input" id="customCheck3">
             <label class="form-check-label" for="visa">Taxable</label>
            </div>  
            </div>
                <div class="col-md-2 mt-3 mb-3">
            <div class="form-check form-switch">
                <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Enables price reduction using coupon codes" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
              
              <label class="form-check-label" for="invalidCheck2">Allow Discounts</label>
            </div>
          </div>
            <div class="col-md-2 mt-3 mb-3">
            <div class="form-check form-check-inline mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Does not add item to online payment but allows booking with related packages requiring payment on-site day of booking.">
             <input type="checkbox" class="form-check-input" id="customCheck3" checked>
             <label class="form-check-label" for="visa">Pay On-site</label>
            </div>  
            </div>
                 
        </div>
          <div class="row mb-5"> 
              <label class="form-check-label offset-md-1 " for="visa">Inventory</label>
        <div class="col-md-2 offset-md-1 mt-3 mb-3"> 
            
        <div class="form-check form-check-inline mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Subtracts from inventory.">
            
             <input type="checkbox" class="form-check-input" id="customCheck3" checked>
             <label class="form-check-label" for="visa">Keep Inventory</label>
        </div>
              </div>
              <div class="col-md-3 mt-3 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Consumable Vs Bookable" data-bs-content="Consumable inventory is for single use items such as supplies. Bookable inventory is for reusible items such as bookable gear.">                 
                <div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                     <label class="form-check-label" for="flexRadioDefault1">
                          Consumable Inventory
                     </label>
                </div>
                <div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                     <label class="form-check-label" for="flexRadioDefault2">
                          Bookable Inventory Only
                     </label>
                </div>
              </div>
          <div class="col-md-2 mb-3 ">
            <label for="validationDefault01" class="form-label">Current Inventory</label>
            <input type="text" class="form-control" id="validationDefault01" value="{Current Inventory}" required>
          </div>
        <div class="col-md-2 mb-3 ">
            <label for="validationDefault01" class="form-label">Max Bookable</label>
            <input type="text" class="form-control" id="validationDefault01" value="{Max Bookable Amount}" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Sets maximum allowable for a single booking." required>
          </div>  
        </div>
        
        
        
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Admin Add-on Notes</label>
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
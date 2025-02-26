
// Load images from Local Storage on page load
function loadImagesFromLocalStorage() {
    const storedImages = localStorage.getItem('uploadedImages');
    if (storedImages) {
        const imagesArray = JSON.parse(storedImages);
        // Hide file upload section and show editing section if there is at least one image
        if (imagesArray.length > 0) {
            document.querySelector('.file-uploadSection').style.display = 'none';
            document.querySelector('.FrameDesignSection').style.display = 'block';
            renderSliderImages(imagesArray);
        }
    }
}

// Function to render images into the slider container
function renderSliderImages(imagesArray) {
    const swiperWrapper = document.querySelector('.Images-frame-slider .swiper-wrapper');
    // Clear existing slides
    swiperWrapper.innerHTML = '';

    imagesArray.forEach((imgSrc) => {
        const slide = document.createElement('div');
        slide.classList.add('swiper-slide');

        slide.innerHTML = `
        <div class="box">
          <div class="frame-main-wrap" style="
            padding: 10px;
            border: 10px solid black;
            max-width: 310px;
            margin: auto;
            height: 100%;
            width: 100%;
          ">
            <div class="frameborder">
              <div class="frameinner">
                <img alt="Frame" class="img-fluid" src="${imgSrc}">
              </div>
            </div>
          </div>
        </div>
      `;
        swiperWrapper.appendChild(slide);
    });

    // After rendering all slides, update the main preview with the first image (if available)
    if (imagesArray.length > 0) {
        document.getElementById('uploaded-image').src = imagesArray[0];
    }
}

// Call the function on page load
document.addEventListener('DOMContentLoaded', loadImagesFromLocalStorage);

// Event listener for image upload
// Get all elements with the class 'upload-photo'
const uploadPhotoElements = document.querySelectorAll('.upload-photo');

// Loop through each element and attach the event listener
uploadPhotoElements.forEach(element => {
    element.addEventListener('change', function (event) {
        const files = event.target.files;
        if (!files.length) return;

        // To store new valid images
        let validImages = [];

        // Read each file one by one using a loop and FileReader
        Array.from(files).forEach(file => {
            // Check if the file is an image
            if (!file.type.startsWith('image/')) {
                alert('Only image files are allowed.');
                return;
            }

            const reader = new FileReader();
            reader.onload = function (e) {
                const img = new Image();
                img.src = e.target.result;

                img.onload = function () {
                    // Validate image resolution (minimum size)
                    if (img.width < 125 || img.height < 112) {
                        alert('One of the images must be at least 125px in width and 112px in height.');
                        return;
                    }

                    // Add the valid image data URL to validImages array
                    validImages.push(e.target.result);

                    // Once all files have been processed, update local storage and render images
                    if (validImages.length === files.length) {
                        // Retrieve already saved images if any
                        const existing = localStorage.getItem('uploadedImages');
                        const existingImages = existing ? JSON.parse(existing) : [];
                        const newImagesArray = existingImages.concat(validImages);

                        // Save to local storage
                        localStorage.setItem('uploadedImages', JSON.stringify(newImagesArray));

                        // Hide file upload section and show editing section
                        document.querySelector('.file-uploadSection').style.display = 'none';
                        document.querySelector('.FrameDesignSection').style.display = 'block';

                        // Render images in slider
                        renderSliderImages(newImagesArray);
                    }
                };
            };
            reader.readAsDataURL(file);
        });
    });
});

// Event listener for removing the images
document.getElementById('remove-image').addEventListener('click', function () {
    // Remove images from Local Storage
    localStorage.removeItem('uploadedImages');

    // Clear slider container
    const swiperWrapper = document.querySelector('.Images-frame-slider .swiper-wrapper');
    swiperWrapper.innerHTML = '';

    // Show file upload section and hide editing section
    document.querySelector('.file-uploadSection').style.display = 'flex';
    document.querySelector('.FrameDesignSection').style.display = 'none';

    // Reset file input value so files can be re-uploaded if needed
    document.getElementById('upload-photo').value = '';
});


// Add a click listener to the slider wrapper
document.querySelector('.Images-frame-slider .swiper-wrapper').addEventListener('click', function(e) {
    // Find the closest slide element (assumes your slide elements have the class 'swiper-slide')
    const slide = e.target.closest('.swiper-slide');
    if (!slide) return;

    // Check if the slide is either active or next
    if (slide.classList.contains('swiper-slide-active') || slide.classList.contains('swiper-slide-next')) {
        // Get the image inside this slide
        const img = slide.querySelector('img');
        if (img) {
            // For demonstration, log or display the image URL
            // console.log('Selected image:', img.src);
            // You can update another element or open a modal with the image here.
            // For example, setting the src of a preview element:
            document.getElementById('uploaded-image').src = img.src;
        }
    }
});



const designOptions = document.querySelectorAll('.frame-change.dropdown-item');

// Add click event listener to each item
designOptions.forEach(option => {
    option.addEventListener('click', function () {
        // Retrieve the design class from the data attribute
        const designClass = this.getAttribute('data-design');
        const displayText = this.getAttribute('data-text');

        // Select the container element
        const frameWrap = document.getElementById('frameWrap');

        // Remove existing design classes (you can list all possible ones if more than two exist)
        frameWrap.classList.remove('classic-card-design', 'bold-card-design');

        // Add the selected design class
        frameWrap.classList.add(designClass);

        // Update the text in the element with id "frame-show"
        const frameShow = document.getElementById('frame-show');
        frameShow.textContent = displayText;

        designOptions.forEach(item => item.classList.remove('li-border-color'));

        // Add the highlight class to the clicked item
        this.classList.add('li-border-color');
    });
});


// Function to update the frame's border image
function updateFrameBorderImage(imageUrl) {
    const frameWrap = document.getElementById('frameWrap');
    if (frameWrap) {
      // Set border-image property. Adjust slicing values as necessary.
      frameWrap.style.borderImageSource = `url(${imageUrl})`;
      frameWrap.style.borderImageSlice = '30'; // adjust this value as needed
      frameWrap.style.borderImageRepeat = 'stretch'; // or 'repeat' depending on your design
    }
}
  
  // Attach click event listener to all property list items
document.querySelectorAll('.frame-color').forEach(item => {
    item.addEventListener('click', function() {
        const img_src = this.getAttribute('data-src');
        const color_name = this.getAttribute('data-color');
        // Get the image inside this item
        const img = this.querySelector('img.LeftSidebar');
        if (img && img.src) {
            updateFrameBorderImage(img_src);
            const colorShow = document.getElementById('color-show');
            colorShow.textContent = color_name;
        }
    });
});

// Select all size option list items
const sizeOptions = document.querySelectorAll('.frame-size');

// Add click event listener to each size option
sizeOptions.forEach(option => {
    option.addEventListener('click', function () {
        
        // Retrieve the width and height values from data attributes
        const width = this.getAttribute('data-width');
        const height = this.getAttribute('data-height');
        const max_width = this.getAttribute('data-max-width');
        const frame_price = this.getAttribute('data-price');
        const frameSizeText = this.querySelector('.propertyName').textContent.trim();

        // Select the frameWrap div
        const frameWrap = document.getElementById('frameWrap');

        // Apply new width and height
        if (frameWrap) {
            frameWrap.style.width = width;
            frameWrap.style.height = height;
            frameWrap.style.maxWidth = max_width;
        }

        // Optional: Highlight selected size option
        sizeOptions.forEach(item => item.classList.remove('selected-size'));
        this.classList.add('selected-size');

        const priceShow = document.getElementById('price-show');
        priceShow.textContent = '₹'+frame_price;

        const sizeShow = document.getElementById('size-show');
        sizeShow.textContent = frameSizeText;
    });
});


// Select all size option list items
const finishOptions = document.querySelectorAll('.frame-finish');

// Add click event listener to each size option
finishOptions.forEach(option => {
    option.addEventListener('click', function () {
        
        const finish_price = this.getAttribute('data-price');
        const frameFinishText = this.querySelector('.propertyName').textContent.trim();

        // Optional: Highlight selected size option
        // finishOptions.forEach(item => item.classList.remove('selected-size'));
        // this.classList.add('selected-size');

        const priceShow = document.getElementById('price-show');
        priceShow.textContent = '₹'+finish_price;

        const finishShow = document.getElementById('finish-show');
        finishShow.textContent = frameFinishText;
    });
});


// Select all size option list items
const hangOptions = document.querySelectorAll('.frame-hang');

// Add click event listener to each size option
hangOptions.forEach(option => {
    option.addEventListener('click', function () {
        
        const framehangText = this.querySelector('.propertyName').textContent.trim();

        // Optional: Highlight selected size option
        // hangOptions.forEach(item => item.classList.remove('selected-size'));
        // this.classList.add('selected-size');

        const hangShow = document.getElementById('hang-show');
        hangShow.textContent = framehangText;
    });
});
(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	document.getElementById('estimateForm').addEventListener('submit', function(event) {
		event.preventDefault(); // Prevent default form submission behavior
	
	
		// Gather form data
		const formData = new FormData(event.target);
		const formProps = Object.fromEntries(formData);
	
		// Simulate a successful AJAX submission
		fetch('/submit_form', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json'
				},
				body: JSON.stringify(formProps)
			})
			.then(data => {
				console.log('Form submitted successfully:', data);
	
				// Show the success message
				document.getElementById('successMessage').style.display = 'block';
	
				// Clear the form
				document.getElementById('estimateForm').reset();
	
				// Hide the success message after 8 seconds
				setTimeout(() => {
					document.getElementById('successMessage').style.display = 'none';
				}, 8000);
			})
			.catch(error => {
				console.error('Error submitting form:', error);
			});
	
		// Log form data in the console
		formData.forEach((value, key) => {
			console.log(`${key}: ${value}`);
		});
	});
	
	// progress Bar Graph
	let progressValue = 0;
	const targetValue = 70;
	const progressElement = document.querySelector('.circular-progress');
	const progressLabel = document.getElementById('progress-value');
	
	function updateProgress(value) {
		progressElement.style.background = `conic-gradient(#1096fe ${value * 3.6}deg, #ddd 0deg)`;
		progressLabel.textContent = `${value}%`;
	}
	
	const interval = setInterval(() => {
		if (progressValue < targetValue) {
			progressValue++;
			updateProgress(progressValue);
		} else {
			clearInterval(interval);
		}
	}, 30); // Adjust speed as needed
})( jQuery );

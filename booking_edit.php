<!DOCTYPE html>
<html lang="en">

<head>
	    <?php head('installation'); ?>

	        <script>



	        	        toLightMode();
	        	            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
	        	            	        if (localStorage.theme === 'system') {
	        	            	        	            if (e.matches) {
	        	            	        	            	
	        	            	        	            }
	        	            	        }
	        	            })
<!DOCTYPE html>
<html lang="en">

<head>
	    <?php head('installation'); ?>

	        <script>



	        	        toLightMode();
	        	            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
	        	            	        if (localStorage.theme === 'system') {
	        	            	        	            if (e.matches) {
	        	            	        	            	                document.documentElement.classList.add('dark');
	        	            	        	            	                            } else {
	        	            	        	            	                            	                document.documentElement.classList.remove('dark');
	        	            	        	            	                            	                            }
	        	            	        	            	                            	                                    }
	        	            	        	            	                            	                                        });

	        	                function updateTheme() {
	        	                	        if (!('theme' in localStorage)) {
	        	                	        	            localStorage.theme = 'system';
	        	                	        	                    }

	        	                	        	                            switch (localStorage.theme) {
	        	                	        	                            	            case 'system':
	        	                	        	                            	                            if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
	        	                	        	                            	                            	                    document.documentElement.classList.add('dark');
	        	                	        	                            	                            	                                    } else {
	        	                	        	                            	                            	                                    	                    document.documentElement.classList.remove('dark');
	        	                	        	                            	                            	                                    	                    
	        	                	        	                            	                            	                                    }
	        	                	        	                            	                            }
	        	                	        	                            }
	        	                	        }
	        	                }
	        	            	        	            	                            }
	        	            	        	            }
	        	            	        }
	        	            })
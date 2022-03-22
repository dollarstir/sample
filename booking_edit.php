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
	        	                	        	                            	                            	                                    	                                                    document.documentElement.setAttribute('color-theme', 'system');
	        	                	        	                            	                            	                                    	                                                                    break;

	        	                	        	                            	                            	                                    	                                                                                case 'dark':
	        	                	        	                            	                            	                                    	                                                                                                document.documentElement.classList.add('dark');
	        	                	        	                            	                            	                                    	                                                                                                                document.documentElement.setAttribute('color-theme', 'dark');
	        	                	        	                            	                            	                                    	                                                                                                                                break;

	        	                	        	                            	                            	                                    	                                                                                                                                            case 'light'                document.documentElement.classList.remove('dark');
	        	                	        	                            	                            	                                    	                                                                                                                                                            document.documentElement.setAttribute('color-theme', 'light');
	        	                	        	                            	                            	                                    	                                                                                                                                                                            break;
	        	                	        	                            	                            	                                    	                                                                                                                                                                                    }
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        }

	        	                	        	                            	                            	                                    	                                                                                                                                                                                            updateTheme();
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        </script>script>
	        	                	        	                            	                            	                                    	                                                                                                                                                                                    </head>head>
	        	                	        	                            	                            	                                    	                                                                                                                                                                                    <body
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        x-data="{
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	        navIsOpen: false,
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                searchIsOpen: false,
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                        search: '',
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                            }"
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                class="language-php h-full w-full font-sans text-gray-900 antialiased"
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                >

	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                    <a
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                        id="skip-to-content-link"
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                            href="installation#main-content"
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                class="absolute bg-gray-100 px-4 py-2 top-3 left-3 text-gray-700 shadow-xl"
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                >
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    Skip to content
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                </a>a>
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    <div class="relative overflow-auto dark:bg-dark-700" id="docsScreen">
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	: "value", 
	        	                	        	                            	                            	                                    }
	        	                	        	                            	                            }
	        	                	        	                            }
	        	                	        }
	        	                }
	        	            	        	            	                            }
	        	            	        	            }
	        	            	        }
	        	            })
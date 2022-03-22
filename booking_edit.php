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
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        <div class="relative lg:flex lg:items-start">
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	            <aside
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            x-data="{
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                    navIsOpen: false,
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        init() {
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        this.$watch('navIsOpen', (val) => {
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            if (val) {
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                document.body.classList.add('overflow-hidden');
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            } else {
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                document.body.classList.remove('overflow-hidden');
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                            }
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                    });
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                        }
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                                        }"
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                                                        class="hidden fixed top-0 bottom-0 left-0 z-20 h-full w-16 bg-gradient-to-b from-gray-100 to-white transition-all duration-300 overflow-hidden lg:sticky lg:w-80 lg:shrink-0 lg:flex lg:flex-col lg:justify-end lg:items-end 2xl:max-w-lg 2xl:w-full dark:from-dark-800 dark:to-dark-700"
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                                                                        :class="{ 'w-64': navIsOpen }"
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                                                                                        @click.away="navIsOpen = false"
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                                                                                                        @keydown.window.escape="navIsOpen = false"
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                                                                                                                    >
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                                                                                                                                    <div class="relative min-h-0 flex-1 flex flex-col xl:w-80">

	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                                                                                                                                    	                                       <a href="home" class="flex items-center py-8 px-4 lg:px-8 xl:px-16">
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                                                                                                                                    	                                       	                        <img
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                                                                                                                                    	                                       	                                                    class="w-8 h-8 shrink-0 transition-all duration-300 lg:w-12 lg:h-12"
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                                                                                                                                    	                                       	                                                                                :class="{ 'w-12 h-12': navIsOpen }"
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                                                                                                                                    	                                       	                                                                                                            src="yolkassets/img/logo.png"
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                                                                                                                                    	                                       	                                                                                                                                        alt="Yolk Framework"
	        	                	        	                            	                            	                                    	                                                                                                                                                                                        	                                                    	        	                            	                                        	                        	                            	                                                            	                                                                                                                                                                                                                    	                                       	                                                                                                                                                                    width="50"
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
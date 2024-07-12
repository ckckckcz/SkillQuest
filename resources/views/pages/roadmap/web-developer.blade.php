<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintar Path ⸺ Solusi Belajar IT</title>
    <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.ico') }}" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" /> -->
  </head>
  <body class="mt-3 bg-white dark:bg-gray-900">
    <div class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-[-1]"></div>
    <!-- Navbar Mulai-->
    <nav class="fixed top-0 w-full z-50 navbar bg-white border border-gray-200 rounded-full shadow dark:bg-gray-800 dark:border-gray-700">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{ asset('images/logo.png') }}" class="h-8" alt="Pintar Path Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-900 dark:text-white">Pintar Path</span>
        </a>
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <button
            type="button"
            class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
            id="user-menu-button"
            aria-expanded="false"
            data-dropdown-toggle="user-dropdown"
            data-dropdown-placement="bottom"
          >
            <img class="w-8 h-8 rounded-full" src="{{ asset('images/profile.jpg') }}" alt="user photo" />
          </button>
          <!-- Dropdown menu -->
          <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
            <div class="px-4 py-3">
              <span class="block text-sm text-gray-900 dark:text-white">Riovaldo Alfiyan</span>
              <span class="block text-sm text-gray-500 truncate dark:text-gray-400">rriovld@gmail.com</span>
            </div>
            <ul class="py-2" aria-labelledby="user-menu-button">
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
              </li>
            </ul>
          </div>
          <button
            type="button"
            class="flex text-sm bg-gray-800 md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
            style="border-radius: 9px"
            id="user-menu-button"
            aria-expanded="false"
            data-dropdown-toggle="user-anjay"
            data-dropdown-placement="bottom"
          >
            <svg
              class="inline-flex items-center p-2 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
              width="40px"
              height="40px"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 17 14"
            >
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
          </button>
          <!-- Dropdown menu -->
          <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-anjay">
            <ul class="py-2" aria-labelledby="user-menu-button">
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Home</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">About</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
          <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
            <li>
              <a href="#" class="block py-2 px-3 text-gray-900 dark:text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-gray-900 dark:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >About</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-gray-900 dark:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Services</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-gray-900 dark:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Pricing</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-gray-900 dark:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar Selesai -->

    <!-- Jumbotron 1 Mulai-->
    <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]" style="margin-top: 65px">
      <div class="px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
        <div class="flex flex-col justify-center">
          <div style="margin-top: 100px">
            <p class="section-title font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 20px">Road Map</p>
            <h1 class="section-title mb-4 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white">Web Developer</h1>
            <div class="mt-7">
                <li class="checklist-item section-title">
                    <div class="checklist-circle">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_981_529)">
                        <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                        <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_981_529">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>                            
                    </div>
                    <span class="checklist-text dark:text-gray-300 text-gray-500 sm:text-sm">Memahami dasar-dasar website development yang mudah dimengerti</span>
                </li>
                <li class="checklist-item section-title">
                    <div class="checklist-circle">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_981_529)">
                        <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#E8EFFF"/>
                        <path d="M7 12L10.1579 15L17 9" stroke="#146FFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_981_529">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>                            
                    </div>
                    <span class="checklist-text dark:text-gray-300 text-gray-500 sm:text-sm">Memahami dasar-dasar website development yang mudah dimengerti</span>
                </li>
            </div>
            <button type="button" class="mt-7 section-title px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mulai Belajar</button>
          </div>
        </div>
        <div class="lg:mt-100 sm:mt-50">
          <img src="{{ asset('images/thumbnail.jpg')}}" alt="" class="section-image mx-auto w-full lg:max-w-xl rounded-lg" />
        </div>
      </div>
    </section>
    <!-- Jumbotron 1 Selesai-->

    <!-- Jumbotron 2 Mulai -->
    <section class="bg-white-50 dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
      <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid gap-8 lg:gap-8">
        <div id="item1" class="section-title max-w-md flex flex-col justify-center">
          <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 20px">Benefit</p>
          <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-4xl dark:text-white">Mengapa Harus Kami ?</h1>
        </div>
        <div class="section-title grid lg:grid-cols-3 gap-5 md:grid-cols-4">
            <div class="flex items-center bg-card p-4 rounded-lg shadow-md w-1/3 bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
              <img src="{{asset('./images/portofoliokeren.png')}}" alt="portfolio-icon" class="w-12 h-12 mr-5" />
              <div>
                <h3 class="text-lg font-semibold text-card-foreground text-gray-900 dark:text-white">Portofolio Unggulan</h3>
                <p class="text-muted-foreground text-gray-900 dark:text-white">Menjadi kandidat yang memiliki value tinggi ketika melamar kerja</p>
              </div>
            </div>
          
            <div class="flex items-center bg-card p-4 w-1/3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <img src="{{asset('./images/karirkilat.png')}}" alt="shortcuts-icon" class="w-12 h-12 mr-5" />
              <div>
                <h3 class="text-lg font-semibold text-card-foreground text-gray-900 dark:text-white">Karir Kilat</h3>
                <p class="text-muted-foreground text-gray-900 dark:text-white">Ikuti panduan belajar terarah buatan oleh professional mentor</p>
              </div>
            </div>
          
            <div class="flex items-center bg-card p-4 w-1/3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <img src="{{asset('./images/aksesselamanya.png')}}" alt="access-icon" class="w-12 h-12 mr-5" />
              <div>
                <h3 class="text-lg font-semibold text-card-foreground text-gray-900 dark:text-white">Akses Selamanya</h3>
                <p class="text-muted-foreground text-gray-900 dark:text-white">Belajar jadi lebih produktif sesuai dengan fase masing-masing</p>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- Jumbotron 2 Selesai -->

    <!-- Road Map -->
    <section class="bg-white-50 dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid gap-3">
          <div id="item1" class="section-title max-w-md flex flex-col justify-center">
            <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 20px">Road Map</p>
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-4xl dark:text-white">Syllabus Web Developer</h1>
          </div>
          <div class="section-title text-sm font-medium text-left text-gray-500 dark:text-gray-400">
            <ul class="flex flex-wrap -mb-px">
                <li class="mr-2">
                    <a href="#" id="front-end-btn" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">Front-End</a>
                </li>
                <li class="mr-2">
                    <a href="#" id="back-end-btn" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Back-End</a>
                </li>
            </ul>
          </div>
          <!-- Front-End Section -->
          <div id="front-end-content" class="grid lg:grid-cols-3 gap-1 md:grid-cols-2 sm:grid-cols-1 mt-2">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 1</p>
                  <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Dasar Pemrograman Web</h5>
                  <div class="mb-4 flex flex-wrap gap-4">
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white ">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                              <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                          </svg>
                          30 Jam
                      </p>
                      <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                              <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                          </svg>
                          4,5
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                        <img src="{{asset('./images/dasar.svg')}}" class="w-5 h-5" alt="" /> 
                          Dasar
                      </p>
                  </div>
                  <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                      <p class="flex flex-wrap gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                          </svg>
                          120 Modul
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-500">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                          </svg>
                          Pengguna Terdaftar
                      </p>
                  </div>
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Gabung Kelas
                  </button>                                
              </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 2</p>
                  <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Dasar Pemrograman Javascript</h5>
                  <div class="mb-4 flex flex-wrap gap-4">
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                              <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                          </svg>
                          30 Jam
                      </p>
                      <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                              <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                          </svg>
                          4,5
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                        <img src="{{asset('./images/dasar.svg')}}" class="w-5 h-5" alt="" /> 
                          Dasar
                      </p>
                  </div>
                  <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                      <p class="flex flex-wrap gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                          </svg>
                          120 Modul
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-500">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                          </svg>
                          Pengguna Terdaftar
                      </p>
                  </div>
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Gabung Kelas
                  </button>                                
              </div>
            </div>                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 3</p>
                  <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Membuat Interface Sebuah Website</h5>
                  <div class="mb-4 flex flex-wrap gap-4">
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                              <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                          </svg>
                          30 Jam
                      </p>
                      <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                              <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                          </svg>
                          4,5
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                        <img src="{{asset('./images/pemula.svg')}}" class="w-5 h-5" alt="">                                                                                            
                          Pemula
                      </p>
                  </div>
                  <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                      <p class="flex flex-wrap gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                          </svg>
                          120 Modul
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-500">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                          </svg>
                          Pengguna Terdaftar
                      </p>
                  </div>
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Gabung Kelas
                  </button>                                
              </div>
            </div>                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 4</p>
                  <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Fundamental sebagai Front-End Web Development</h5>
                  <div class="mb-4 flex flex-wrap gap-4">
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                              <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                          </svg>
                          30 Jam
                      </p>
                      <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                              <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                          </svg>
                          4,5
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                        <img src="{{asset('./images/menengah.svg')}}" class="w-5 h-5" alt="">                                                                    
                          Menengah
                      </p>
                  </div>
                  <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                      <p class="flex flex-wrap gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                          </svg>
                          120 Modul
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-500">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                          </svg>
                          Pengguna Terdaftar
                      </p>
                  </div>
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Gabung Kelas
                  </button>                                
              </div>
            </div>                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 5</p>
                  <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Menggunakan Framework Front-End Web</h5>
                  <div class="mb-4 flex flex-wrap gap-4">
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                              <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                          </svg>
                          30 Jam
                      </p>
                      <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                              <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                          </svg>
                          4,5
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                          <img src="{{asset('./images/jago.svg')}}" class="w-5 h-5" alt="">                                
                          Jago
                      </p>
                  </div>
                  <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                      <p class="flex flex-wrap gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                          </svg>
                          120 Modul
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-500">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                          </svg>
                          Pengguna Terdaftar
                      </p>
                  </div>
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Gabung Kelas
                  </button>                                
              </div>
            </div>                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail1.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 6</p>
                  <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Menggunakan Library Front-End Web Development</h5>
                  <div class="mb-4 flex flex-wrap gap-4">
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                              <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                          </svg>
                          30 Jam
                      </p>
                      <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                              <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                          </svg>
                          4,5
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                        <img src="{{asset('./images/profesional.svg')}}" class="h-5 w-5" alt="">                                    
                          Professional
                      </p>
                  </div>
                  <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                      <p class="flex flex-wrap gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                          </svg>
                          120 Modul
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-500">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                          </svg>
                          Pengguna Terdaftar
                      </p>
                  </div>
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Gabung Kelas
                  </button>                                
              </div>
            </div> 
          </div>
          <!-- Front-End Section Selesai -->
          <!-- Back-End Section -->
          <div id="back-end-content" class="grid lg:grid-cols-3 gap-1 md:grid-cols-2 sm:grid-cols-2 hidden mt-2">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail2.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 1</p>
                  <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Menggunakan AWS Cloud Dasar</h5>
                  <div class="mb-4 flex flex-wrap gap-4">
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                            <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                        </svg>
                        30 Jam
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                            <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        4,5
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                        <img src="{{asset('./images/dasar.svg')}}" class="w-5 h-5" alt="" >                       
                          Dasar
                      </p>
                  </div>
                  <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                      <p class="flex flex-wrap gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                          </svg>
                          87 Modul
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-500">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                          </svg>
                          Pengguna Terdaftar
                      </p>
                  </div>
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Gabung Kelas
                  </button>                                
              </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail2.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 2</p>
                  <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Dasar Pemrograman Javascript</h5>
                  <div class="mb-4 flex flex-wrap gap-4">
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                              <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                          </svg>
                          30 Jam
                      </p>
                      <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                              <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                          </svg>
                          4,5
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                        <img src="{{asset('./images/dasar.svg')}}" class="w-5 h-5" alt="" /> 
                          Dasar
                      </p>
                  </div>
                  <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                      <p class="flex flex-wrap gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                          </svg>
                          120 Modul
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-500">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                          </svg>
                          Pengguna Terdaftar
                      </p>
                  </div>
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Gabung Kelas
                  </button>                                
              </div>
            </div>                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail2.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 3</p>
                  <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Membuat Aplikasi Back-End</h5>
                  <div class="mb-4 flex flex-wrap gap-4">
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                              <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                          </svg>
                          30 Jam
                      </p>
                      <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                              <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                          </svg>
                          4,5
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                        <img src="{{asset('./images/pemula.svg')}}" class="w-5 h-5" alt="">                                                                                            
                          Pemula
                      </p>
                  </div>
                  <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                      <p class="flex flex-wrap gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                          </svg>
                          120 Modul
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-500">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                          </svg>
                          Pengguna Terdaftar
                      </p>
                  </div>
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Gabung Kelas
                  </button>                                
              </div>
            </div>                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail2.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 4</p>
                  <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Membangung Arsitektur Cloud di AWS</h5>
                  <div class="mb-4 flex flex-wrap gap-4">
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                              <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                          </svg>
                          30 Jam
                      </p>
                      <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                              <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                          </svg>
                          4,5
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                        <img src="{{asset('./images/menengah.svg')}}" class="w-5 h-5" alt="">                                                                    
                          Menengah
                      </p>
                  </div>
                  <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                      <p class="flex flex-wrap gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                          </svg>
                          120 Modul
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-500">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                          </svg>
                          Pengguna Terdaftar
                      </p>
                  </div>
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Gabung Kelas
                  </button>                                
              </div>
            </div>                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail2.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 5</p>
                  <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Menggunakan Framework Back-End Web</h5>
                  <div class="mb-4 flex flex-wrap gap-4">
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                              <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                          </svg>
                          30 Jam
                      </p>
                      <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                              <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                          </svg>
                          4,5
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                          <img src="{{asset('./images/jago.svg')}}" class="w-5 h-5" alt="">                                
                          Jago
                      </p>
                  </div>
                  <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                      <p class="flex flex-wrap gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                          </svg>
                          120 Modul
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-500">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                          </svg>
                          Pengguna Terdaftar
                      </p>
                  </div>
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Gabung Kelas
                  </button>                                
              </div>
            </div>                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10">
              <img class="rounded-t-lg" src="{{asset('./images/thumbnail/thumbnail2.png')}}" alt="" />
              <div class="p-5">
                  <p class="font-medium text-green-500 lg:text-sm dark:text-green-400 mb-2" style="font-size: 15px">Langkah 6</p>
                  <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">Belajar Fundamental Back-End Web Development</h5>
                  <div class="mb-4 flex flex-wrap gap-4">
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
                              <path fill="#146ffe" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                          </svg>
                          30 Jam
                      </p>
                      <p class="flex flex-wrap gap-2 ext-gray-900 dark:text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5">
                              <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                          </svg>
                          4,5
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-900 dark:text-white">
                        <img src="{{asset('./images/profesional.svg')}}" class="h-5 w-5" alt="">                                    
                          Professional
                      </p>
                  </div>
                  <div class="mb-7 flex flex-wrap gap-4 text-gray-500">
                      <p class="flex flex-wrap gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                          </svg>
                          120 Modul
                      </p>
                      <p class="flex flex-wrap gap-2 text-gray-500">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5">
                            <path fill="#6b7280" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                          </svg>
                          Pengguna Terdaftar
                      </p>
                  </div>
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Gabung Kelas
                  </button>                                
              </div>
            </div> 
          </div>
          <div class="inspirasi text-center" style="margin-top: 100px">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 sm:text-2xl md:text-4xl lg:text-4xl dark:text-white text-center">Ayo !! Jadi Web-Developer seperti mereka </h1>
            <div class="avatar-group">
              <div class="avatar">
                <img src="{{asset('./images/inspirasi/inspirasi1.jpg')}}"/>
              </div>
              <div class="avatar">
                <img src="{{asset('./images/inspirasi/inspirasi2.png')}}"/>
              </div>
              <div class="avatar">
                <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
              </div>
              <div class="avatar">
                <img src="https://rimage.gnst.jp/livejapan.com/public/article/detail/a/00/04/a0004213/img/basic/a0004213_main.jpg?20200710184501&q=80&rw=750&rh=536"/>
              </div>
              <div class="avatar">
                <img src="https://da4e1j5r7gw87.cloudfront.net/wp-content/uploads/sites/768/2018/08/glasses-american-man-20s-hipster.jpg"/>
              </div>
            </div>
            <button type="button" class="mt-10 px-6 py-3.5 font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-lg">Mulai Belajar</button>
          </div>
        </div>
      </section>
    <!-- Road Map Selesai -->
    <!-- Footer Mulai -->
    <footer class="bg-white dark:bg-gray-900 mt-10">
      <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
            <a href="https://flowbite.com/" class="flex items-center">
              <img src="{{asset('/images/logo.png')}}" class="h-8 me-3" alt="FlowBite Logo" />
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Pintar Path</span>
            </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="" class="hover:underline">HTML</a>
                </li>
                <li>
                  <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                </li>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="https://github.com/themesberg/flowbite" class="hover:underline">Github</a>
                </li>
                <li>
                  <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                </li>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="#" class="hover:underline">Privacy Policy</a>
                </li>
                <li>
                  <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Pintar Path™</a>. All Rights Reserved. </span>
          <div class="flex mt-4 sm:justify-center sm:mt-0">
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Facebook page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                <path
                  d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"
                />
              </svg>
              <span class="sr-only">Discord community</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                <path
                  fill-rule="evenodd"
                  d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">Twitter page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">GitHub account</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">Dribbble account</span>
            </a>
          </div>
        </div>
      </div>
    </footer>
    <div data-dial-init class="fixed bottom-6 start-6 group">
      <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 sm:mr-5">
        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
            fill-rule="evenodd"
            clip-rule="evenodd"
          ></path>
        </svg>
      </button>
    </div>
    <!-- Footer Selesai -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.min.js"></script>
    <script>
      document.getElementById('front-end-btn').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('front-end-content').classList.remove('hidden');
            document.getElementById('back-end-content').classList.add('hidden');
            this.classList.add('text-blue-600', 'border-blue-600');
            document.getElementById('back-end-btn').classList.remove('text-blue-600', 'border-blue-600');
        });

        document.getElementById('back-end-btn').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('back-end-content').classList.remove('hidden');
            document.getElementById('front-end-content').classList.add('hidden');
            this.classList.add('text-blue-600', 'border-blue-600');
            document.getElementById('front-end-btn').classList.remove('text-blue-600', 'border-blue-600');
        });
      </script>
      <script>
        gsap.registerPlugin(ScrollTrigger);

        gsap.utils.toArray(".max-w-sm").forEach((item, index) => {
          gsap.from(item, {
            opacity: 0,
            y: 50,
            duration: 1,
            scrollTrigger: {
              trigger: item,
              start: "top 80%",
              toggleActions: "play none none none", // ubah toggleActions agar tidak ada reverse
              once: true, // animasi hanya terjadi sekali
              onEnter: () => {
                gsap.to(item, { opacity: 1, y: 0, duration: 1 });
              },
            },
          });
        });
        gsap.registerPlugin(ScrollTrigger);

        // Animasi untuk judul
        gsap.from(".section-title", {
          opacity: 0,
          y: 50,
          duration: 1,
          scrollTrigger: {
            trigger: ".section-title",
            start: "top 80%",
            toggleActions: "play none none none",
            once: true, // animasi hanya terjadi sekali
          },
        });

        // Animasi untuk paragraf
        gsap.from(".section-content", {
          opacity: 0,
          y: 50,
          duration: 1,
          scrollTrigger: {
            trigger: ".section-content",
            start: "top 80%",
            toggleActions: "play none none none",
            once: true, // animasi hanya terjadi sekali
          },
        });

        // Animasi untuk gambar
        gsap.from(".section-image", {
          opacity: 0,
          y: 50,
          duration: 1,
          scrollTrigger: {
            trigger: ".section-image",
            start: "top 80%",
            toggleActions: "play none none none",
            once: true, // animasi hanya terjadi sekali
          },
        });
      </script>
  </body>
</html>
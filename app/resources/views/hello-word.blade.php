<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(255,255,255,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(255,255,255,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="180" height="38" viewBox="0 0 180 38" fill="none">
                        <path d="M58.4229 7.29587H57.2266L51.5527 18.2334L46.4941 8.62888C46.1296 7.94528 45.7194 7.53513 45.2637 7.39841C44.9902 7.33005 44.6598 7.29587 44.2725 7.29587H42.085V29H45.6396V13.7558L50.083 22.5058H52.4414L57.0898 13.5166V29H60.9521V9.75681C60.9521 8.4124 60.4508 7.62627 59.4482 7.39841C59.152 7.33005 58.8102 7.29587 58.4229 7.29587ZM69.7363 29V7.29587H65.7373V29H69.7363ZM78.8965 29V20.7285H83.2031C83.4538 20.7285 83.6361 20.8538 83.75 21.1045C83.75 21.15 83.7614 21.1842 83.7842 21.207L86.3818 29H90.415L88.125 22.5058C87.7376 21.4349 87.2363 20.6829 86.6211 20.25C88.6035 19.4297 89.6061 17.8802 89.6289 15.6015V12.1494C89.6289 9.30108 88.2959 7.67184 85.6299 7.26169C85.1286 7.19333 84.6045 7.15915 84.0576 7.15915L74.8975 7.29587V29H78.8965ZM85.0488 10.6455C85.3451 10.6911 85.5046 10.8392 85.5273 11.0898V16.832C85.4818 17.1054 85.3223 17.2536 85.0488 17.2763H78.8965V10.6455H85.0488ZM101.865 19.8056C102.048 19.8056 102.184 19.931 102.275 20.1816L106.411 29H110.649L106.89 21.0703C106.206 19.6347 105.591 18.7233 105.044 18.3359C104.862 18.222 104.679 18.1194 104.497 18.0283C105.112 17.7321 105.682 17.0257 106.206 15.9091C106.32 15.6585 106.445 15.3737 106.582 15.0547L109.863 7.29587H105.864L102.275 15.875C102.116 16.1256 101.968 16.2623 101.831 16.2851H97.832V7.29587H93.833V29H97.832V19.8056H101.865ZM123.467 10.6113C123.717 10.6569 123.854 10.7936 123.877 11.0215V25.2744C123.831 25.525 123.695 25.6618 123.467 25.6845H116.597C116.323 25.6845 116.187 25.5478 116.187 25.2744V11.0215C116.187 10.748 116.323 10.6113 116.597 10.6113H123.467ZM112.085 24.5224C112.085 27.5758 113.703 29.1709 116.938 29.3076C117.098 29.3076 117.257 29.3076 117.417 29.3076H122.646C126.11 29.1481 127.887 27.553 127.979 24.5224V11.7392C127.933 8.5947 126.156 7.01104 122.646 6.98825H117.417C113.885 7.03382 112.108 8.61748 112.085 11.7392V24.5224Z" fill="#141414"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M31 10.45L28.5405 7.99997L18 18.5L28.5405 29L31 26.55L22.9189 18.5L31 10.45Z" fill="#F2994A"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13 10.45L10.5405 7.99997L-1.83588e-06 18.5L10.5405 29L13 26.55L4.91892 18.5L13 10.45Z" fill="#F2994A"/>
                    </svg>
                </div>


                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="ml-4 text-center text-sm text-gray-500 sm:ml-0">
                        <table>
                            <thead>
                                <td>Author</td>
                                <td>Review</td>
                                <td>Time</td>
                            </thead>
                            <tbody>
                            @foreach ($reviews as $review)
                                <tr>
                                    <td>{{ $review->author }}</td>
                                    <td>{{ $review->text }}</td>
                                    <td>{{ $review->create_time }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

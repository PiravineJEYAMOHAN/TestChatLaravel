<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Laravel</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- component -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- This is an example component -->
<div class="flex flex-col h-screen w-screen bg-white">
  <div id="chat"  class="flex flex-col mt-2 flex-col-reverse overflow-y-scroll	 space-y-3 mb-20 pb-3 ">
    
       
  </div>
  <div class="flex flex-row  items-center  bottom-0 my-2 w-full">
    <div
      class="ml-2 flex flex-row border-gray items-center w-full border rounded-3xl h-12 px-2"
    >
      <button
        class="focus:outline-none flex items-center justify-center h-10 w-10 hover:text-red-600 text-red-400 ml-1"
      >
        <svg
          class="w-5 h-5"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"
          ></path>
        </svg>
      </button>
      <div class="w-full">
        <input
          type="text"
          id="message"
          class="border rounded-2xl border-transparent w-full focus:outline-none text-sm h-10 flex items-center"
          placeholder="Type your message...."
        />
      </div>
    </div>
    <div class="ml-3 mr-2 ml-2 flex flex-row border-gray items-center border rounded-3xl h-12 px-2">

        <input type="text" id="nickname" class="border rounded-2xl border-transparent w-full focus:outline-none text-sm h-10 flex items-center" placeholder="Entrer pseudo">
      
    </div>
    <div>
        <button
         id="submitButton"
        class="flex items-center justify-center h-10 w-10 mr-2 rounded-full bg-gray-200 hover:bg-gray-300 text-indigo-800 text-white focus:outline-none"
      >
        <svg
          class="w-5 h-5 transform rotate-90 -mr-px"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
          ></path>
        </svg>
      </button>
    </div>
  </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex ">

<form class="w-full  border-2 p-4 ">
    <div class="flex flex-wrap -mx-3 mb-6 ">

        <div  class="w-full md:w-1/2  px-3 mt-2" >
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="fname" >
                Prénom
              </label>
              <input name="fname"class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>

        </div>
        <div  class="w-full md:w-1/2  px-3 mt-2" >
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="lname" >
                Nom
              </label>
              <input name="lname"class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
        </div>
        <div  class="w-full md:w-1/2  px-3 mt-2" >
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="ar_fname" >
                الاسم
              </label>
              <input name="ar_fname"class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
        </div>
        <div  class="w-full md:w-1/2  px-3 mt-2" >
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="ar_lname" >
                اللقب
              </label>
              <input name="ar_lname"class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
        </div>
       <x-datepicker />
        <div  class="w-full md:w-1/2  px-3 mt-2" >
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="address" >
                Address
              </label>
              <input name="address"class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
        </div>
        <div  class="w-full md:w-1/2  px-3 mt-2" >
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="email" >
               Email
              </label>
              <input name="email" type="email"class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
        </div>
        <div  class="w-full md:w-1/2  px-3 mt-2" >
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="phone" >
                TELEPHONE
              </label>
              <input name="phone"class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
        </div>
        <div  class="w-full md:w-1/2  px-3 mt-2" >
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="profession" >
                Profession
              </label>
              <input name="profession"class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
        </div>



    </div>


    <button type="submit" methode="post" class="bg-blue-500 p-3 text-center font-bold text-white rounded-lg float-right mt-10 text-xl hover:bg-blue-700 ">Enregistrer</button>
  </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

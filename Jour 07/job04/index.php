<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Runetrack3</title>
  <meta name="author" content="Jessy Charlet" />
  <meta name="description" content="Runetrack3" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../../src/output.css" rel="stylesheet">
</head>

<body>
  <header class="h-10 bg-gradient-to-r from-purple-500 to-pink-500">
    <nav>
      <ul class="flex-row grid grid-cols-4 w-2/4 m-auto place-self-center h-full ">
        <li class="h-10 text-center"><a href="*" class="block h-10 align-middle leading-10 hover:bg-gradient-to-t from-purple-500 to-pink-500 hover:text-white">Accueil</a></li>
        <li class="h-10 text-center"><a href="*" class="block h-10 align-middle leading-10 hover:bg-gradient-to-t from-purple-500 to-pink-500 hover:text-white">Inscription</a></li>
        <li class="h-10 text-center"><a href="*" class="block h-10 align-middle leading-10 hover:bg-gradient-to-t from-purple-500 to-pink-500 hover:text-white">Connexion</a></li>
        <li class="h-10 text-center"><a href="*" class="block h-10 align-middle leading-10 hover:bg-gradient-to-t from-purple-500 to-pink-500 hover:text-white">Rechercher</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
      <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
          <div class="max-w-md mx-auto">
            <form action="./index.php" method="post" class="grid grid-cols-6 gap-4">


              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
              </svg>

              <div class="col-span-5">

                <input type="radio" id="mr" name="civ" value="Mr" checked />
                <label for="mr">Mr</label>

                <input type="radio" id="mmr" name="civ" value="Mme" />
                <label for="mmr">Mme</label>
              </div>


              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
              </svg>

              <div class="col-span-5">
                <div class="divide-y divide-gray-200">
                  <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                    <div class="relative">
                      <label for="prenom" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Prénom : </label>
                      <input type="text" id="prenom" name="prenom" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" required />
                    </div>
                    <div class="relative">
                      <label for="nom" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Nom : </label>
                      <input type="text" id="nom" name="nom" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" required />

                    </div>
                    <div class="relative">
                      <label for="adresse" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Adresse : </label>
                      <input type="text" id="adresse" name="adresse" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" required />
                    </div>
                  </div>
                </div>
              </div>



              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
</svg>
              <div class="col-span-5">
              <div class="divide-y divide-gray-200">
                  <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                    <div class="relative">
                <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email : </label>
                <input type="email" id="email" pattern=".+@example\.com" size="30" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" required />
              </div>
                  </div>
              </div>
              </div>

              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
              </svg>
                <div class="col-span-5">
              <div class="divide-y divide-gray-200">
                  <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                    <div class="relative">
              <label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Mot de passe : </label>
              <input type="password" id="pass" name="password" minlength="8" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" required />
                    </div>
              <div class="relative">
              <label for="confPassword" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Confirmez le mot de passe : </label>
              <input type="confPassword" id="confPass" name="confPassword" minlength="8" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" required />
                    </div>
                  </div>
              </div>
                </div>

<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
  <path strokeLinecap="round" strokeLinejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
</svg>
              <div class="divide-y divide-gray-200">
                  <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                    <div class="relative">
                <div>
                  <input type="checkbox" id="informatique" name="informatique" class="inline-block w-4 h-4 text-pink-500 bg-pink-100 border-pink-300 rounded focus:ring-pink-500 dark:focus:ring-pink-600 dark:ring-offset-pink-800 focus:ring-2 dark:bg-pink-700 dark:border-pink-600" checked />
                  <label for="informatique" class="inline-block pl-[0.15rem] hover:cursor-pointer">informatique</label>
                </div>

                <div>
                  <input type="checkbox" id="voyages" name="voyages" class="inline-block w-4 h-4 text-pink-500 bg-pink-100 border-pink-300 rounded focus:ring-pink-500 dark:focus:ring-pink-600 dark:ring-offset-pink-800 focus:ring-2 dark:bg-pink-700 dark:border-pink-600" />
                  <label for="voyages" class="inline-block pl-[0.15rem] hover:cursor-pointer">voyages</label>
                </div>
                <div>
                  <input type="checkbox" id="sport" name="sport" class="inline-block w-4 h-4 text-pink-500 bg-pink-100 border-pink-300 rounded focus:ring-pink-500 dark:focus:ring-pink-600 dark:ring-offset-pink-800 focus:ring-2 dark:bg-pink-700 dark:border-pink-600" />
                  <label for="sport" class="inline-block pl-[0.15rem] hover:cursor-pointer">sport</label>
                </div>
                <div>
                  <input type="checkbox" id="lecture" name="lecture" class="inline-block w-4 h-4 text-pink-500 bg-pink-100 border-pink-300 rounded focus:ring-pink-500 dark:focus:ring-pink-600 dark:ring-offset-pink-800 focus:ring-2 dark:bg-pink-700 dark:border-pink-600" />
                  <label for="lecture" class="inline-block pl-[0.15rem] hover:cursor-pointer">lecture</label>
                </div>
                    </div>
                  </div>
                </div>
                <div class="col-span-6">
                <div class="divide-y divide-gray-200">
                  <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                    <div class="relative">
              <input type="button" id="valider" value="valider" class="bg-pink-500 text-white rounded-md px-2 py-1" />
                </div>
                  </div>
                </div>
                </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="w-full fixed bottom-0 left-0 h-10 bg-gradient-to-r from-pink-500 to-purple-500">
    <ul class="flex-row grid grid-cols-4 w-2/4 m-auto place-self-center h-full ">
      <li class="h-10 text-center"><a href="*" class="block h-10 align-middle leading-10 hover:bg-gradient-to-t from-purple-500 to-pink-500 hover:text-white">Accueil</a></li>
      <li class="h-10 text-center"><a href="*" class="block h-10 align-middle leading-10 hover:bg-gradient-to-t from-purple-500 to-pink-500 hover:text-white">Inscription</a></li>
      <li class="h-10 text-center"><a href="*" class="block h-10 align-middle leading-10 hover:bg-gradient-to-t from-purple-500 to-pink-500 hover:text-white">Connexion</a></li>
      <li class="h-10 text-center"><a href="*" class="block h-10 align-middle leading-10 hover:bg-gradient-to-t from-purple-500 to-pink-500 hover:text-white">Rechercher</a></li>
    </ul>
  </footer>


</body>

</html>
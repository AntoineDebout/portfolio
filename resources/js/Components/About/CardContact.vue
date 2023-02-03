<template>
  <div class="flex flex-col gap-2 max-w-lg">
    <div class="bg-white self-start px-4 py-1 border-l border-green-500 border-l-8 font-bold rounded">CONTACT</div>
    <div class="bg-white p-4 flex flex-col gap-6 rounded">
      <form class="w-full">
        <div class="w-full flex flex-col gap-4 px-3">
          <input
              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="fullName"
              type="text"
              placeholder="Nom complet"
          >
          <input
              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="email"
              type="text"
              placeholder="Email"
          >
          <input
              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="mobile"
              type="text"
              placeholder="Téléphone"
          >
          <textarea
              name="message"
              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              rows="6"
              placeholder="Message"
          ></textarea>
          <button
              class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
              type="button">
            Envoyer
          </button>
        </div>

      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: "CardContact"
}
</script>
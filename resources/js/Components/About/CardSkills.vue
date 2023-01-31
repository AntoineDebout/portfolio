<template>
  <div class="flex flex-col gap-2 max-w-lg">
    <div class="bg-white self-start px-4 py-1 border-l border-green-500 border-l-8 font-bold rounded">COMPETENCES</div>
    <div class="bg-white p-4 flex flex-col gap-6 rounded">
      <div class="flex flex-col gap-2">
        <div class="text-lg underline font-bold">Hard-Skills :</div>
        <div class="flex flex-row flex-wrap gap-1">
          <common-tag
              v-for="(item, key) in hardSkills"
              :id="key"
              backgroundClass="bg-blue-900"
              roundedClass="rounded"
              class="px-2"
          >
            <template #text>
              <div
                  class="text-white text-xs p-2 font-bold"
                  v-text="item"></div>
            </template>
          </common-tag>
        </div>
      </div>
      <div class="flex flex-col gap-2">
        <div class="text-lg underline font-bold">Soft-Skills :</div>
        <div class="flex flex-row flex-wrap gap-1">
          <common-tag
              v-for="(item, key) in softSkills"
              :id="key + 500"
              backgroundClass="bg-blue-900"
              roundedClass="rounded"
              class="px-2"
          >
            <template #text>
              <div
                  class="text-white text-xs p-2 font-bold"
                  v-text="item"></div>
            </template>
          </common-tag>
        </div>
      </div>
      <div class="flex flex-col gap-2">
        <div class="text-lg underline font-bold">Langues :</div>
        <div class="flex flex-row flex-wrap gap-1">
          <common-tag
              id="language-french"
              backgroundClass="bg-blue-900"
              roundedClass="rounded"
              class="px-2"
          >
            <template #text>
              <div
                  class="text-white text-sm p-2">&#127467;&#127479; Francais <br/>Langue Natale
              </div>
            </template>
          </common-tag>
          <common-tag
              id="language-english"
              backgroundClass="bg-blue-900"
              roundedClass="rounded"
              class="px-2"
          >
            <template #text>
              <div
                  class="text-white text-sm p-2">	&#x1F1FA;&#x1F1F8; Anglais <br/>Lu, Ecrit, Parlé<br/>TOEIC 805/990
              </div>
            </template>
          </common-tag>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  name: "CardSkills",
  props: {
    data: {
      type: Object,
      required: true,
    }
  },
  computed: {
    hardSkills(){
      return this.data.hard;
    },
    softSkills(){
      return this.data.soft;
    },
  }
}
</script>
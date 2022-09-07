              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="name" :value="__('Name')" />
                      <x-jet-input id="name" class="block w-full" type="text" name="name" placeholder="Food Name"
                          :value="old('name') ?? $food->name " required autofocus />
                      <x-validation-message name="name" />
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="picture_path" :value="__('Image')" />
                      <x-jet-input id="picture_path" class="appearance-none block w-full" type="file"
                          name="picture_path" />
                      <x-validation-message name="picture_path" />
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="description" :value="__('Description')" />
                      <textarea name="description"
                          class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                          id="grid-last-name" type="text"
                          placeholder="Food Description" :value="old('description') ?? $food->description">{{ $food->description }}</textarea>
                      <x-validation-message name="description" />
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="ingredients" :value="__('Food Ingredients')" />
                      <x-jet-input id="ingredients" class="block w-full" type="text" name="ingredients"
                          placeholder="Food Ingredients" :value="old('ingredients') ?? $food->ingredients " />
                      <p class="text-gray-600 text-xs italic">Dipisahkan dengan koma, contoh: Bawang Merah, Paprika,
                          Bawang Bombay, Timun</p>
                      <x-validation-message name="ingredients" />
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="price" :value="__('Price')" />
                      <x-jet-input id="price" class="block w-full" type="number" name="price" placeholder="Price"
                          :value="old('price') ?? $food->price " />
                      <x-validation-message name="price" />
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="rate" :value="__('Rate')" />
                      <x-jet-input id="rate" class="block w-full" type="number" step="0.01" max="5" name="rate"
                          placeholder="Rate" :value="old('rate') ?? $food->rate " />
                      <x-validation-message name="rate" />
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="types" :value="__('Types')" />
                      <x-jet-input id="types" class="block w-full" type="text" name="types" placeholder="Types"
                          :value="old('types') ?? $food->types " />
                      <p class="text-gray-600 text-xs italic">Dipisahkan dengan koma, contoh:
                          recommended,popular,new food</p>
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3 text-right">
                      <x-jet-button class="bg-green-500 hover:bg-green-700 text-white font-bold">
                          {{ $submit }}
                      </x-jet-button>
                  </div>
              </div>

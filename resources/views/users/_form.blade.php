              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="name" :value="__('Name')" />
                      <x-jet-input id="name" class="block w-full" type="text" name="name" placeholder="User Name"
                          :value="old('name') ?? $user->name " required autofocus />
                          <x-validation-message name="name"/>
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="email" :value="__('Email')" />
                      <x-jet-input id="email" class="block w-full" type="text" name="email" placeholder="User Email"
                          :value="old('email') ?? $user->email " />
                          <x-validation-message name="email"/>
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="profile_photo_path" :value="__('Image')" />
                      <x-jet-input id="profile_photo_path" class="appearance-none block w-full" type="file"
                          name="profile_photo_path"/>
                          <x-validation-message name="profile_photo_path"/>
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="password" :value="__('Password')" />
                      <x-jet-input id="password" class="block w-full" type="password" name="password"
                          placeholder="User Password" />
                          <x-validation-message name="password"/>
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="password_confirmation" :value="__('Password Confirmation')" />
                      <x-jet-input id="password_confirmation" class="block w-full" type="password"
                          name="password_confirmation" placeholder="User Password Confirmation"
                          :value="old('password_confirmation') ?? $user->password_confirmation " />
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="address" :value="__('Address')" />
                      <x-jet-input id="address" class="block w-full" type="text" name="address"
                          placeholder="User Address" :value="old('address') ?? $user->address " />
                          <x-validation-message name="address"/>
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="roles" :value="__('Roles')" />
                      <select name="roles"
                          class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                          id="grid-last-name">
                          <option value="USER">User</option>
                          <option value="ADMIN">Admin</option>
                      </select>
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="house_number" :value="__('House Number')" />
                      <x-jet-input id="house_number" class="block w-full" type="text" name="house_number"
                          placeholder="User House Number" :value="old('house_number') ?? $user->house_number " />
                          <x-validation-message name="house_number"/>
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="phone_number" :value="__('Phone Number')" />
                      <x-jet-input id="phone_number" class="block w-full" type="text" name="phone_number"
                          placeholder="User Phone Number" :value="old('phone_number') ?? $user->phone_number " />
                          <x-validation-message name="phone_number"/>
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                      <x-jet-label for="city" :value="__('City')" />
                      <x-jet-input id="city" class="block w-full" type="text" name="city" placeholder="User City"
                          :value="old('city') ?? $user->city " />
                          <x-validation-message name="city"/>
                  </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3 text-right">
                      <x-jet-button class="bg-green-500 hover:bg-green-700 text-white font-bold">
                          {{ $submit }}
                      </x-jet-button>
                  </div>
              </div>

<!-- Name -->
<div>
  <x-label for="name" :value="__('Name')" />

  <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
</div>

{{-- 追加箇所 --}}
<div class="mt-4">
  <x-label for="club" :value="__('クラブ')" />

  <x-input id="club" class="block mt-1 w-full" type="text" name="club" :value="old('club')" required autofocus />
</div>
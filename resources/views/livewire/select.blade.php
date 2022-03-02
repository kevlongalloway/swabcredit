<div class="mt-4">
    <x-jet-label for="subscription" value="{{ __('Subscription') }}" />
    
    <select name="subscription" wire:model="subscription" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required>
        <option selected>Select A Program</option>
        @foreach($subscriptions as $sub)
            <option value="{{ $sub->id }}">{{ $sub->name }}</option>
        @endforeach
    </select>

    @if(count($plans))
        <div class="mt-4">
            <x-jet-label for="plan" value="{{ __('Select A Plan') }}" />
            <select name="plan" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                @foreach($plans as $p)
                <option value="{{ $p->name }}">{{ $p->name }} - ${{ $p->price }}</option>
                @endforeach
            </select>
        </div>
    @endif
</div>

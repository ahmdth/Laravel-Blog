<x-layout>
    {{-- <form x-data="{ name: '', age: 1, agree: false }">
        <div x-wizard:step.rules="{ age: 'required|numeric|min:1|max:120' }">
            Your age: <input x-model.number='age' name='age' />
        </div>
        <div x-wizard:if="age < 13" x-wizerd:step="agree===true">
            <input type='checkbox' x-model='agree' name='agree' />
            Have my parent's agree to register
        </div>
        <div x-wizard:step.rules="{ name: 'required' }">
            Your name: <input x-model='name' name='name' />
        </div>
        <button x-show='$wizard.isNotLast()'' @click='$wizard.next()' :disabled='$wizard.cannotGoForward()'>Next</button>
        <button x-show='$wizard.isLast()'' :disabled='$wizard.isNotComplate()' type="submit">Next</button> --}}
    </form>
</x-layout>

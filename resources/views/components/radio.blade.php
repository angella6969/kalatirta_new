<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" required name="{{ $nama }}" id="{{ $nama }}" value="{{ $nilai }}"
        {{old($nama)==$nilai ? 'checked' : '' }}>
    <label class="form-check-label" for="inlineRadio1">{{ $nilai }}</label>
</div>
<div class="mt-3">
    <label for="{{ $nama }}" class="form-label">{{ $judul }}</label>
    <div class="input-group">
        <input type="text" class="form-control @error($nama) is-invalid @enderror" id="{{ $nama }}" name="{{ $nama }}"
            placeholder="{{ $judul }}" value="{{ old($nama, $nilai) }}" required>

        @error($nama)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

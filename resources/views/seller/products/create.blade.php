
<style>
/* Default Light Mode Styles */
:root {
    --background-color: #ffffff;
    --text-color: #000000;
    --container-background: #f9f9f9;
    --border-color: #cccccc;
    --input-background: #ffffff;
    --input-text-color: #000000;
    --button-background: #007bff;
    --button-text-color: #ffffff;
    --button-hover-background: #0056b3;
    --select-background: #ffffff;
    --select-text-color: #000000;
    --select-border-color: #cccccc;
    --select-hover-background: #e6e6e6;
}

/* Dark Mode Styles */
.dark {
    --background-color: #121212;
    --text-color: #ffffff;
    --container-background: #1e1e1e;
    --border-color: #333333;
    --input-background: #2e2e2e;
    --input-text-color: #ffffff;
    --button-background: #007bff;
    --button-text-color: #ffffff;
    --button-hover-background: #666666;
    --select-background: #2e2e2e;
    --select-text-color: #ffffff;
    --select-border-color: #333333;
    --select-hover-background: #444444;
}

/* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    font-family: Arial, sans-serif;
    background-color: var(--background-color);
    margin: 0;
    padding: 0;
    text-align: center;
    color: var(--text-color);
}

h1 {
    color: var(--text-color);
    margin-top: 20px;
}

.container {
    max-width: 500px;
    margin: 20px auto;
    padding: 20px;
    background-color: var(--container-background);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    text-align: left;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: var(--border-color);
}

input[type="text"], input[type="number"], textarea, input[type="file"], .select {
    width: 100%;
    padding: 10px;
    border: 1px solid var(--border-color);
    border-radius: 4px;
    box-sizing: border-box;
    background-color: var(--input-background);
    color: var(--input-text-color);
}

textarea {
    resize: none;
}

.select-wrapper {
    position: relative;
    display: inline-block;
    width: 100%;
}

.select {
    width: 100%;
    padding: 10px;
    border: 1px solid var(--select-border-color);
    border-radius: 4px;
    background-color: var(--select-background);
    color: var(--select-text-color);
    appearance: none;
    background-image: url('data:image/svg+xml;charset=UTF-8,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"%3E%3Cpath d="M7 10l5 5 5-5z" fill="%23ffffff"/%3E%3C/svg%3E');
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.select:hover {
    background-color: var(--select-hover-background);
}

.select:focus {
    outline: none;
    border-color: #007bff;
}

button {
    width: 100%;
    padding: 10px;
    background-color: var(--button-background);
    color: var(--button-text-color);
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 20px;
}

button:hover {
    background-color: var(--button-hover-background);
}

.image-preview {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 10px;
    margin-bottom: 20px;
    justify-content: center;
}

.image-thumbnail {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border: 1px solid var(--border-color);
    border-radius: 8px;
}


</style>

    <h1>Buat Produk</h1>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="nama-produk">Nama Produk</label>
                <input type="text" id="nama-produk" name="nama-produk" placeholder="Masukkan nama produk" required>
            </div>
            <div class="form-group">
                <label for="harga-produk">Harga Produk</label>
                <input type="number" id="harga-produk" name="harga-produk" placeholder="Masukkan harga produk" required>
            </div>
            <div class="form-group">
                <label for="deskripsi-produk">Deskripsi Produk</label>
                <textarea id="deskripsi-produk" name="deskripsi-produk" rows="4" placeholder="Masukkan deskripsi produk" required></textarea>
            </div>
            <div class="form-group">
                <label for="kategori-produk">Kategori Produk</label>
                <div class="select-wrapper">
                    <select id="kategori-produk" name="kategori-produk" class="select" required>
                        <option value="makanan-manis">Makanan Manis</option>
                        <option value="makanan-asin">Makanan Asin</option>
                        <option value="buah-buahan">Buah-buahan</option>
                        <option value="sayuran">Sayuran</option>
                        <option value="minuman">Minuman</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="upload-img">Unggah Gambar</label>
                <input type="file" id="upload-img" name="upload-img" accept="image/*" onchange="previewImage(event)">
            </div>
            <div class="image-preview" id="image-preview"></div>
            <button type="submit">Tambah Produk</button>
        </form>
    </div>
    <script>
        function previewImage(event) {
            const files = event.target.files;
            const previewContainer = document.getElementById('image-preview');
            previewContainer.innerHTML = '';
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgElement = document.createElement('img');
                    imgElement.src = e.target.result;
                    imgElement.classList.add('image-thumbnail');
                    previewContainer.appendChild(imgElement);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>


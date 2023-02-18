<p align="center"><a href="https://sweetalert2.github.io/" target="_blank"><img id="logo-text" src="https://sweetalert2.github.io/images/SweetAlert2.png" alt="SweetAlert2"></a></p>

<p align="center">
A beautiful, responsive, customizable, accessible (WAI-ARIA) replacement for JavaScript's popup boxes
Zero dependencies
</p>

## About Sweetalert2

สำหรับ sweetalert มี 2 version ซึ่งในที่นี้จะใช้ sweetalert2 เนื่องจากมีลูกเล่น และ document แนะนำการใช้งานพร้อมตัวอย่างชัดเจนมากกว่า (ในความเห็นของตนเอง) สามารถติดตั้ง และใช้งานได้ตาม link : https://sweetalert2.github.io/

sweetalert2 ใช้สำหรับเป็น popup แจ้งเตือน หรือ popup เพื่อให้ยืนยันข้อมูลบางอย่าง เช่น ใช้ในการยืนยันก่อน logout ออกจากระบบเป็นต้น

## Download & install

To get started with SweetAlert2, use npm to add the package to your project's:

```
npm install sweetalert2
```

Or use CDN

```
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
```

## Usage

### 1. Initialize the plugin by referencing the necessary files:

```
<script src="sweetalert2.all.min.js"></script>
```
You can also include the stylesheet separately if desired:
```
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
```
Or

```
// ES6 Modules or TypeScript
import Swal from 'sweetalert2'

// CommonJS
const Swal = require('sweetalert2')
```
It's possible to import JS and CSS separately, e.g. if you need to customize styles:

```
import Swal from 'sweetalert2/dist/sweetalert2.js'

import 'sweetalert2/src/sweetalert2.scss'
```

### 2. Call the sweetAlert2-function after the page has loaded

```
Swal.fire({
title: 'Error!',
text: 'Do you want to continue',
icon: 'error',
confirmButtonText: 'Cool'
})
```

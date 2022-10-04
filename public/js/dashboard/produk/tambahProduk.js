const productQty = document.querySelectorAll('.stok-input');

    productQty.forEach(num =>
    {
        const qtyInput = num.querySelector('.jumlahStok');
        const minInput = num.querySelector('.minus');
        const plusInput = num.querySelector('.plus');

        minInput.addEventListener('click', () => 
        {
            minInput.classList.add('clicked')
            plusInput.classList.remove('clicked')
            qtyInput.stepDown();
            checkMaxMin();
        })
        plusInput.addEventListener('click', () => 
        {
            plusInput.classList.add('clicked')
            minInput.classList.remove('clicked')
            qtyInput.stepUp();
            checkMaxMin();
        })
    })

    const beratProduk = document.querySelectorAll('.berat-input') ;
    beratProduk.forEach(num =>
    {
        const qtyInput = num.querySelector('.beratProduk');
        const minInput = num.querySelector('.minus');
        const plusInput = num.querySelector('.plus');

        minInput.addEventListener('click', () => 
        {
            minInput.classList.add('clicked')
            plusInput.classList.remove('clicked')
            qtyInput.stepDown();
            checkMaxMin();
        })
        plusInput.addEventListener('click', () => 
        {
            plusInput.classList.add('clicked')
            minInput.classList.remove('clicked')
            qtyInput.stepUp();
            checkMaxMin();
        })

    })

    // Image preview
    function previewImg1()
    {
        let image = URL.createObjectURL(event.target.files[0]);
        let imgPreview = document.querySelector('.img-preview1');
        let img = imgPreview.querySelector('.img1');
        img.src = image;
    }
    function resetImg1()
    {
        let imgBtn = document.querySelector('.uploadImg1');
        let imgPreview = document.querySelector('.img-preview1');
        let img = imgPreview.querySelector('.img1');
        img.src = '';
        imgBtn.value = '';
    }
    function previewImg2()
    {
        let image = URL.createObjectURL(event.target.files[0]);
        let imgPreview = document.querySelector('.img-preview2');
        let img = imgPreview.querySelector('.img2');
        img.src = image;
    }
    function resetImg2()
    {
        let imgBtn = document.querySelector('.uploadImg2');
        let imgPreview = document.querySelector('.img-preview2');
        let img = imgPreview.querySelector('.img2');
        img.src = '';
        imgBtn.value = '';
    }
    function previewImg3()
    {
        let image = URL.createObjectURL(event.target.files[0]);
        let imgPreview = document.querySelector('.img-preview3');
        let img = imgPreview.querySelector('.img3');
        img.src = image;
    }
    function resetImg3()
    {
        let imgBtn = document.querySelector('.uploadImg3');
        let imgPreview = document.querySelector('.img-preview3');
        let img = imgPreview.querySelector('.img3');
        img.src = '';
        imgBtn.value = '';
    }
    function previewImg4()
    {
        let image = URL.createObjectURL(event.target.files[0]);
        let imgPreview = document.querySelector('.img-preview4');
        let img = imgPreview.querySelector('.img4');
        img.src = image;
    }
    function resetImg4()
    {
        let imgBtn = document.querySelector('.uploadImg4');
        let imgPreview = document.querySelector('.img-preview4');
        let img = imgPreview.querySelector('.img4');
        img.src = '';
        imgBtn.value = '';
    }
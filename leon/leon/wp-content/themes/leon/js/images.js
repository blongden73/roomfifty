var scrape = require('scrape');
const download = require('image-downloader')
const fs = require('fs');
const imageDownload = require('image-download');
const imageType = require('image-type');
const imagemin = require('imagemin');
const imageminJpegtran = require('imagemin-jpegtran');
const imageminPngquant = require('imagemin-pngquant');

scrape.request('https://roomfifty.com/shop/', function (err, $) {
    if (err) return console.error(err);

    $('.rf-new-shop__src').each(function (div) {
        // var image = $('.rf-new-shop__src')
        // console.log(div.attribs["data-src"]);

        // imageDownload(div.attribs["data-src"]).then(buffer => {
        //     const type = imageType(buffer);
        //     var split = div.attribs["data-src"].split('/products/');
        //     console.log(split[1]);
        //
        //     fs.writeFile('js/images/' + split[1] + '.' + type.ext, buffer, (err) => console.log(err ? err : 'done!'));
        // });

        // (async () => {
        //     const files = await imagemin(['js/images/*.{jpg,png}'], 'js/build/images', {
        //         plugins: [
        //             imageminJpegtran(),
        //             imageminPngquant({quality: '65-80'})
        //         ]
        //     });
        //
        //     console.log(files);
        //     //=> [{data: <Buffer 89 50 4e …>, path: 'build/images/foo.jpg'}, …]
        // })();
        var compress_images = require('compress-images'), INPUT_path_to_your_images, OUTPUT_path;

        INPUT_path_to_your_images = 'js/images/**/*.{jpg,JPG,jpeg,JPEG,png,svg,gif}';
        OUTPUT_path = 'js/images/compressed/';

        compress_images(INPUT_path_to_your_images, OUTPUT_path, {compress_force: false, statistic: true, autoupdate: true}, false,
                                            {jpg: {engine: 'mozjpeg', command: ['-quality', '60']}},
                                            {png: {engine: 'pngquant', command: ['--quality=20-50']}},
                                            {svg: {engine: 'svgo', command: '--multipass'}},
                                            {gif: {engine: 'gifsicle', command: ['--colors', '64', '--use-col=web']}}, function(){
        });
    });
});

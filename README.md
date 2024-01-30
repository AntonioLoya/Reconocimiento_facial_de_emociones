
# Reconocimiento facial de emociones

Esta es una prueba de detección de emociones basada en la salida de parámetros de clmtrackr.



clmtrackr
======

[![npm version](https://img.shields.io/npm/v/clmtrackr.svg)](https://www.npmjs.com/package/clmtrackr)

![tracked face](https://auduno.github.io/clmtrackr/examples/media/clmtrackr_03.jpg)

**clmtrackr** is a javascript library for fitting facial models to faces in videos or images. It currently is an implementation of *constrained local models* fitted by *regularized landmark mean-shift*, as described in [Jason M. Saragih's paper](http://dl.acm.org/citation.cfm?id=1938021). **clmtrackr** tracks a face and outputs the coordinate positions of the face model as an array, following the numbering of the model below:

[![facemodel_numbering](https://auduno.github.io/clmtrackr/examples/media/facemodel_numbering_new_small.png)](https://auduno.github.io/clmtrackr/examples/media/facemodel_numbering_new.png)

[Reference](http://auduno.github.io/clmtrackr/docs/reference.html) - [Overview](https://www.auduno.com/2014/01/05/fitting-faces/)

The library provides some generic face models that were trained on [the MUCT database](http://www.milbo.org/muct/) and some additional self-annotated images. Check out [clmtools](https://github.com/auduno/clmtools) for building your own models.

For tracking in video, it is recommended to use a browser with WebGL support, though the library should work on any modern browser.

For some more information about Constrained Local Models, take a look at Xiaoguang Yan's [excellent tutorial](https://sites.google.com/site/xgyanhome/home/projects/clm-implementation/ConstrainedLocalModel-tutorial%2Cv0.7.pdf?attredirects=0), which was of great help in implementing this library.



### License ###

**clmtrackr** is distributed under the [MIT License](http://www.opensource.org/licenses/MIT)

## Authors

- [@Antonio De Jesus Loya Castillo](https://github.com/AntonioLoya)
- [@Jhair Martínez Solórzano](https://github.com/JhairM16)




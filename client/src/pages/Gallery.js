import React, { Component } from 'react'
import {Link} from 'react-router-dom'

export default class gallery extends Component {
    componentDidMount = () => {
        let tagScript = document.createElement('script');
        tagScript.src = './js/magnific-popup.js';

        document.querySelector('#root').appendChild(tagScript);
    }
    render() {
        return (
            <>
                {/* breadcrumb section start */}
                <div className="wp_bread_wrapper">
                    <img src="./images/shape2.png" className="img-responsive shape2" />
                    <div className="container">
                        <div className="row">
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div className="wp_bread_caption">
                                    <h1>Gallery</h1>
                                    <ul className="breadcrumb">
                                        <li><a href="">Home</a></li>
                                        <li>Gallery</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/* gallery section start */}
                <div className="wp_gallery_wrapper gallery_page wp_top_padder50 wp_bottom_padder50">
                    <img src="./images/shape1.png" className="img-responsive shape1" />
                    <div className="container-fluid">
                        <div className="row">
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div className="wp_button_group">
                                    <button className="wp_button active" data-filter="all">All</button>
                                    <button className="wp_button" data-filter="swimming">Swimming</button>
                                    <button className="wp_button" data-filter="kids">Kids</button>
                                    <button className="wp_button" data-filter="party">Pool Party</button>
                                    <button className="wp_button" data-filter="adults">Adults</button>
                                </div>
                            </div>
                            <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div className="row">
                                    <div className="wp_gallery">
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter adults" data-value={1}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/01.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/01.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value={2}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/02.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/02.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids" data-value={3}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/03.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/03.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value={4}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/04.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/04.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids party" data-value={5}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/05.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/05.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids swimming" data-value={6}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/06.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/06.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value={7}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/07.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/07.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming kids" data-value={8}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/08.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/08.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter adults" data-value={7}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/09.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/09.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter adults party" data-value={7}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/10.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/10.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming adults" data-value={7}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/11.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/11.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter party" data-value={7}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/12.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/12.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value={7}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/13.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/13.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids" data-value={7}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/14.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/14.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value={7}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/15.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/15.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter adults party" data-value={7}>
                                            <div className="wp_gallery_img">
                                                <img src="./images/gallery/16.jpg" className="img-responsive" />
                                                <div className="wp_gallery_overlay popup-gallery">
                                                    <a href="./images/gallery/16.jpg"><i className="fa fa-search-plus" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div className="wp_pagination wp_top_padder50">
                                                <ul className="pagination">
                                                    <li><a href="#">&lt;</a></li>
                                                    <li className="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#">&gt;</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </>
        )
    }
}

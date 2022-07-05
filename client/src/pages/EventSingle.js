import React, { Component } from 'react'
import {Link} from 'react-router-dom'

export default class event_single extends Component {
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
                                    <h1>Events Single</h1>
                                    <ul className="breadcrumb">
                                        <li><Link to="/">Home</Link></li>
                                        <li>Event Single</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/* event single page start */}
                <div className="wp_event_single_wrapper wp_top_padder100 wp_bottom_padder100">
                    <div className="container">
                        <div className="row">
                            <div className="col-lg-4 col-md-4 col-sm-12 col-xs-12 wp_bottom_padder50">
                                <div className="widget_area">
                                    <div className="widget widget_recent_post">
                                        <h4 className="widget-title">Recent Events</h4>
                                        <ul>
                                            <li><Link to="/#"><i className="fa fa-angle-right" aria-hidden="true" />Pool Party On the Seak  All are Welcome</Link></li>
                                            <li><Link to="/#"><i className="fa fa-angle-right" aria-hidden="true" />Pool Party At Night</Link></li>
                                            <li><Link to="/#"><i className="fa fa-angle-right" aria-hidden="true" />Kids Pool Party Inaugration</Link></li>
                                            <li><Link to="/#"><i className="fa fa-angle-right" aria-hidden="true" />Pool Partry On the Seak  All are Welcome</Link></li>
                                        </ul>
                                    </div>
                                    <div className="widget widget_upcoming_events">
                                        <h4 className="widget-title">Up Coming Events</h4>
                                        <ul>
                                            <li>
                                                <img src="./images/sidebar/b1.jpg" className="img-responsive" />
                                                <div className="post">
                                                    <h4><Link to="/#">Lorem ipsum dolor</Link></h4>
                                                    <p><Link to="/#">1 March 2018 | 6:25 AM</Link></p>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="./images/sidebar/b2.jpg" className="img-responsive" />
                                                <div className="post">
                                                    <h4><Link to="/#">Lorem ipsum dolor</Link></h4>
                                                    <p><Link to="/#">1 March 2018 | 6:25 AM</Link></p>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="./images/sidebar/b3.jpg" className="img-responsive" />
                                                <div className="post">
                                                    <h4><Link to="/#">Lorem ipsum dolor</Link></h4>
                                                    <p><Link to="/#">1 March 2018 | 6:25 AM</Link></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div className="widget widget_tags">
                                        <h4 className="widget-title">Tags</h4>
                                        <Link to="/#" className="wp_button">Games</Link>
                                        <Link to="/#" className="wp_button">Matches</Link>
                                        <Link to="/#" className="wp_button">News</Link>
                                        <Link to="/#" className="wp_button">Tennis</Link>
                                        <Link to="/#" className="wp_button">Up Comming Match</Link>
                                        <Link to="/#" className="wp_button">Games</Link>
                                        <Link to="/#" className="wp_button">Matches</Link>
                                        <Link to="/#" className="wp_button">News</Link>
                                    </div>
                                    <div className="widget widget_social_icons">
                                        <h4 className="widget-title">Follow Us</h4>
                                        <ul>
                                            <li><Link to="/#"><i className="fa fa-twitter" aria-hidden="true" /></Link></li>
                                            <li><Link to="/#"><i className="fa fa-facebook" aria-hidden="true" /></Link></li>
                                            <li><Link to="/#"><i className="fa fa-google-plus" aria-hidden="true" /></Link></li>
                                            <li><Link to="/#"><i className="fa fa-linkedin" aria-hidden="true" /></Link></li>
                                            <li><Link to="/#"><i className="fa fa-pinterest" aria-hidden="true" /></Link></li>
                                            <li><Link to="/#"><i className="fa fa-instagram" aria-hidden="true" /></Link></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div className="wp_event_all_item">
                                    <div className="wp_event_item">
                                        <div className="wp_event_item_img">
                                            <img src="./images/blog.jpg" className="img-responsive" />
                                            <Link to="/event_single">26<br />Sept</Link>
                                        </div>
                                        <div className="wp_event_item_text">
                                            <h1>Pool Partry On the Seak  All are Welcome</h1>
                                            <ul>
                                                <li>Organized By: Divid Carlo</li>
                                                <li>People Joined : 825</li>
                                            </ul>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid Dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. tUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid Dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid.</p>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid Dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid Dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid.</p>
                                            <button className="wp_button">GET NOW</button>
                                        </div>
                                    </div>
                                    <div className="wp_blog_comment">
                                        <div className="comment_area">
                                            <h2>All Comments</h2>
                                            <ol className="comment-list">
                                                <li>
                                                    <div className="wp_comment_caption">
                                                        <div className="wp_comment_img">
                                                            <img src="./images/comment/comment5.jpg" />
                                                        </div>
                                                        <div className="wp_comment_text">
                                                            <h3>Leonardo <small>Yesterday 2:45pm</small><Link to="/#">Reply</Link></h3>
                                                            <p>Phasellus placerat ex eu Aenean sit amet nisl imperdiet, lacinia odio in, vulputate urna. mauris molestie vestibulum. Aenean sit amet nisl imperdiet, lacinia odio in, vulputate urna.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div className="wp_comment_caption">
                                                        <div className="wp_comment_img">
                                                            <img src="./images/comment/comment1.jpg" />
                                                        </div>
                                                        <div className="wp_comment_text">
                                                            <h3>Elizabeth <small>Yesterday 8:40am</small><Link to="/#">Reply</Link></h3>
                                                            <p>Phasellus placerat ex eu Aenean sit amet nisl imperdiet, lacinia odio in, vulputate urna. mauris molestie vestibulum. Aenean sit amet nisl imperdiet, lacinia odio in, vulputate urna.</p>
                                                        </div>
                                                    </div>
                                                    <ul className="children">
                                                        <li>
                                                            <div className="wp_comment_caption">
                                                                <div className="wp_comment_img">
                                                                    <img src="./images/comment/comment3.jpg" />
                                                                </div>
                                                                <div className="wp_comment_text">
                                                                    <h3>Darwin <small>5 Hours ago</small><Link to="/#">Reply</Link></h3>
                                                                    <p>Phasellus placerat ex eu Aenean sit amet nisl imperdiet, lacinia odio in, vulputate urna. mauris molestie vestibulum. Aenean sit amet nisl imperdiet, lacinia odio in, vulputate urna.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div className="wp_comment_caption">
                                                        <div className="wp_comment_img">
                                                            <img src="./images/comment/comment4.jpg" />
                                                        </div>
                                                        <div className="wp_comment_text">
                                                            <h3>Thomas <small>July 15, 2018 8:50pm</small><Link to="/#">Reply</Link></h3>
                                                            <p>Phasellus placerat ex eu Aenean sit amet nisl imperdiet, lacinia odio in, vulputate urna. mauris molestie vestibulum. Aenean sit amet nisl imperdiet, lacinia odio in, vulputate urna.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div className="wp_blog_comment_form">
                                        <form>
                                            <h2>Leave a Comment</h2>
                                            <div className="wp_blog_form">
                                                <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div className="wp_form_group">
                                                        <textarea className="form-control" placeholder="Comment" defaultValue={""} />
                                                    </div>
                                                </div>
                                                <div className="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <div className="wp_form_group">
                                                        <input type="text" placeholder="Name" className="form-control" />
                                                    </div>
                                                </div>
                                                <div className="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <div className="wp_form_group">
                                                        <input type="text" placeholder="Email" className="form-control" />
                                                    </div>
                                                </div>
                                                <div className="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <div className="wp_form_group">
                                                        <input type="text" placeholder="Website URL" className="form-control" />
                                                    </div>
                                                </div>
                                                <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div className="wp_form_group">
                                                        <button className="wp_button">Reply</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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

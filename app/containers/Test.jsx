import React, { Component } from 'react';

export default class Test extends Component {

    componentWillMount(){
        //alert('Test component mounted');
        console.log('publictest component mounted');
    }

    render() {
        return (
            <div className="yeah">
            <div className="wrap">
                <h1>WP Reactivate TEST</h1>
                <p>Title: </p>
            </div>
            </div>
        );
    }
}
/* {this.props.wpObject.title} */
import React, { Component } from 'react';
import Helmet from 'react-helmet';
import PropTypes from 'prop-types';

class DefaultLayout extends Component {
  render() {
    const { data, children } = this.props;

    return <div>{children}</div>;
  }
}

DefaultLayout.propTypes = {
  children: PropTypes.func.isRequired,
};

export default DefaultLayout;

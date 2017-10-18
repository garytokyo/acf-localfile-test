import React, { Component } from 'react';
import PropTypes from 'prop-types';

class PageTemplate extends Component {
  render() {
    const currentPage = this.props.data.wordpressPage;

    return <div />;
  }
}

PageTemplate.propTypes = {
  data: PropTypes.shape({
    wordpressPage: PropTypes.object,
  }).isRequired,
};

export default PageTemplate;

export const pageQuery = graphql`
  query currentPageQuery($id: Int!) {
    wordpressPage(wordpress_id: { eq: $id }) {
      id
      title
      content
      excerpt
      slug
      author {
        name
      }
      featured_media
    }
    site {
      id
      siteMetadata {
        title
      }
    }
  }
`;

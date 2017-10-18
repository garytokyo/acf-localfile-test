import React from 'react';
import PropTypes from 'prop-types';

const PostTemplate = props => {
  const post = props.data.wordpressPost;

  return <div />;
};

PostTemplate.propTypes = {
  data: PropTypes.shape({
    wordpressPost: PropTypes.object,
  }).isRequired,
};

export default PostTemplate;

export const pageQuery = graphql`
  query currentPostQuery($id: Int!) {
    wordpressPost(wordpress_id: { eq: $id }) {
      id
      slug
      title
      content
      excerpt
      date
      author {
        name
      }
      featured_media
      categories {
        name
      }
    }
    site {
      id
      siteMetadata {
        title
      }
    }
  }
`;

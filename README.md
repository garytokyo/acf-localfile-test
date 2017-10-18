# Demo Site to show ACF issue.

I have put this together to show issue with localFile on ACF images.

## Wordpress

api folder contains wordpress which is installed through composer. I have commited ACF pro but other plugins (acf to rest) will be installed along with wordpress. I have also included a database export and I have commited uploads folder just for ease (wp-config.php too).

    composer install

The virtual host should be `demowordpressapi.local` and point it at the api folder. For ease probably just create databse with the details in the wp-config. User name for wordpress login is `gatsbyuser` and password is `!hM(htxSnX1vaCE4ZG`.
To replicate the issue I am having run the following query in graphiql (you should find that localFile cannot be used):

```
query aboutPageQuery {
  wordpressPage(wordpress_id: {eq: 6}) {
    id
    title
    content
    excerpt
    slug
    author {
      name
    }
    featured_media
    acf {
      test {
        copy
        image {
          wordpress_id
          title
          filename
          url
          alt
          author
          description
          caption
          name
          date
          modified
          mime_type
          type
          icon
          width
          height
        }
      }
    }
  }
  site {
    id
    siteMetadata {
      title
    }
  }
}
```


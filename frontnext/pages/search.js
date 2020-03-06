<<<<<<< HEAD
import React from 'react';
import Layout from '../components/Layout';

const Search = ({url}) => {
    return (
        <Layout>
            당신이 검색한 키워드는 "{url.query.keyword}" 입니다.
        </Layout>
    );
};

=======
import React from 'react';
import Layout from '../components/Layout';

const Search = ({url}) => {
    return (
        <Layout>
            당신이 검색한 키워드는 "{url.query.keyword}" 입니다.
        </Layout>
    );
};

>>>>>>> 78f73c664159341f41233d9d1aff2c31be21e3a9
export default Search;
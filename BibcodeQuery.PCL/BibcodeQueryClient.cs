/*
 * BibcodeQuery.PCL
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io )
 */
using System;
using BibcodeQuery.PCL.Controllers;
using BibcodeQuery.PCL.Http.Client;
using BibcodeQuery.PCL.Utilities;

namespace BibcodeQuery.PCL
{
    public partial class BibcodeQueryClient
    {

        /// <summary>
        /// Singleton access to BibcodeQueryBinding controller
        /// </summary>
        public BibcodeQueryBindingController BibcodeQueryBinding
        {
            get
            {
                return BibcodeQueryBindingController.Instance;
            }
        }
        /// <summary>
        /// The shared http client to use for all API calls
        /// </summary>
        public IHttpClient SharedHttpClient
        {
            get
            {
                return BaseController.ClientInstance;
            }
            set
            {
                BaseController.ClientInstance = value;
            }        
        }
        #region Constructors
        /// <summary>
        /// Default constructor
        /// </summary>
        public BibcodeQueryClient() { }

        /// <summary>
        /// Client initialization constructor
        /// </summary>
        public BibcodeQueryClient(string oAuthAccessToken)
        {
            Configuration.OAuthAccessToken = oAuthAccessToken;
        }
        #endregion
    }
}
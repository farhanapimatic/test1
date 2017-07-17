/*
 * Tester.Tests
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io )
 */
using System;
using System.Collections.Generic;
using System.Globalization;
using System.IO;
using System.Threading.Tasks;
using Newtonsoft.Json.Converters;
using APIMATIC.SDK.Common; 
using APIMATIC.SDK.Http.Client;
using APIMATIC.SDK.Http.Response;
using Tester.Tests.Helpers;
using NUnit.Framework;
using Tester.PCL;
using Tester.PCL.Controllers;
using Tester.PCL.Models;
using Tester.PCL.Exceptions;

namespace Tester.Tests
{
    [TestFixture]
    public class QueryParamControllerTest : ControllerTestBase
    {
        /// <summary>
        /// Controller instance (for all tests)
        /// </summary>
        private static IQueryParamController controller;

        /// <summary>
        /// Setup test class
        /// </summary>
        [SetUp]
        public static void SetUpClass()
        {
            controller = GetClient().QueryParam;
            applyConfiguration();
        }

        /// <summary>
        /// TODO: Add description for test TestStringParam 
        /// </summary>
        [Test]
        public async Task TestStringParam() 
        {
            // Parameters for the API call
            string mstring = "l;asd;asdwe[2304&&;'.d??\\a\\\\\\;sd//";

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.StringParamAsync(mstring);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestRfc3339DateTime 
        /// </summary>
        [Test]
        public async Task TestRfc3339DateTime() 
        {
            // Parameters for the API call
            DateTime datetime = DateTime.ParseExact("1994-02-13T14:01:54.9571247Z", "yyyy'-'MM'-'dd'T'HH':'mm':'ss.FFFFFFFK", CultureInfo.InvariantCulture, DateTimeStyles.RoundtripKind);

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.Rfc3339DateTimeAsync(datetime);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestMultipleParams 
        /// </summary>
        [Test]
        public async Task TestMultipleParams() 
        {
            // Parameters for the API call
            int number = 123412312;
            double precision = 1112.34;
            string mstring = "\"\"test./;\";12&&3asl\"\";\"qw1&34\"///..//.";
            string url = "http://www.abc.com/test?a=b&c=\"http://lolol.com?param=no&another=lol\"";

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.MultipleParamsAsync(number, precision, mstring, url);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestSimpleQuery 
        /// </summary>
        [Test]
        public async Task TestSimpleQuery() 
        {
            // Parameters for the API call
            bool boolean = true;
            int number = 4;
            string mstring = "TestString";
            // key-value map for optional query parameters
            Dictionary<string, object> queryParams = new Dictionary<string, object>();

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.SimpleQueryAsync(boolean, number, mstring, queryParams);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestRfc3339DateTimeArray 
        /// </summary>
        [Test]
        public async Task TestRfc3339DateTimeArray() 
        {
            // Parameters for the API call
            List<DateTime> datetimes = APIHelper.JsonDeserialize<List<DateTime>>("[\"1994-02-13T14:01:54.9571247Z\",\"1994-02-13T14:01:54.9571247Z\"]", new IsoDateTimeConverter());

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.Rfc3339DateTimeArrayAsync(datetimes);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestRfc1123DateTimeArray 
        /// </summary>
        [Test]
        public async Task TestRfc1123DateTimeArray() 
        {
            // Parameters for the API call
            List<DateTime> datetimes = APIHelper.JsonDeserialize<List<DateTime>>("[\"Sun, 06 Nov 1994 08:49:37 GMT\",\"Sun, 06 Nov 1994 08:49:37 GMT\"]", new CustomDateTimeConverter("r"));

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.Rfc1123DateTimeArrayAsync(datetimes);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestRfc1123DateTime 
        /// </summary>
        [Test]
        public async Task TestRfc1123DateTime() 
        {
            // Parameters for the API call
            DateTime datetime = DateTime.ParseExact("Sun, 06 Nov 1994 08:49:37 GMT", "r", CultureInfo.InvariantCulture, DateTimeStyles.RoundtripKind);

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.Rfc1123DateTimeAsync(datetime);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestUnixDateTime 
        /// </summary>
        [Test]
        public async Task TestUnixDateTime() 
        {
            // Parameters for the API call
            DateTime datetime = new DateTime(1970, 1, 1, 0, 0, 0, DateTimeKind.Utc).AddSeconds(double.Parse("1484719381"));

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.UnixDateTimeAsync(datetime);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestUnixDateTimeArray 
        /// </summary>
        [Test]
        public async Task TestUnixDateTimeArray() 
        {
            // Parameters for the API call
            List<DateTime> datetimes = APIHelper.JsonDeserialize<List<DateTime>>("[1484719381,1484719381]", new UnixDateTimeConverter());

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.UnixDateTimeArrayAsync(datetimes);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestDate 
        /// </summary>
        [Test]
        public async Task TestDate() 
        {
            // Parameters for the API call
            DateTime date = DateTime.ParseExact("1994-02-13", "yyyy'-'MM'-'dd", CultureInfo.InvariantCulture, DateTimeStyles.RoundtripKind);

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.DateAsync(date);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestDateArray 
        /// </summary>
        [Test]
        public async Task TestDateArray() 
        {
            // Parameters for the API call
            List<DateTime> dates = APIHelper.JsonDeserialize<List<DateTime>>("[\"1994-02-13\",\"1994-02-13\"]", new CustomDateTimeConverter("yyyy'-'MM'-'dd"));

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.DateArrayAsync(dates);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestNoParams 
        /// </summary>
        [Test]
        public async Task TestNoParams() 
        {

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.NoParamsAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestIntegerEnumArray 
        /// </summary>
        [Test]
        public async Task TestIntegerEnumArray() 
        {
            // Parameters for the API call
            List<SuiteCode> suites = APIHelper.JsonDeserialize<List<SuiteCode>>("[1, 3, 4, 2, 3]");

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.IntegerEnumArrayAsync(suites);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestStringEnumArray 
        /// </summary>
        [Test]
        public async Task TestStringEnumArray() 
        {
            // Parameters for the API call
            List<Days> days = APIHelper.JsonDeserialize<List<Days>>("[\"Tuesday\", \"Saturday\", \"Wednesday\", \"Monday\", \"Sunday\"]");

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.StringEnumArrayAsync(days);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestStringArray 
        /// </summary>
        [Test]
        public async Task TestStringArray() 
        {
            // Parameters for the API call
            List<string> strings = APIHelper.JsonDeserialize<List<string>>("[\"abc\", \"def\"]");

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.StringArrayAsync(strings);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestNumberArray 
        /// </summary>
        [Test]
        public async Task TestNumberArray() 
        {
            // Parameters for the API call
            List<int> integers = APIHelper.JsonDeserialize<List<int>>("[1,2,3,4,5]");

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.NumberArrayAsync(integers);
            }
            catch(APIException) {};

            // Test response code
            Assert.IsTrue((httpCallBackHandler.Response.StatusCode >= 200)
                    && (httpCallBackHandler.Response.StatusCode <= 208),
                    "Status should be between 200 and 208");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestUrlParam 
        /// </summary>
        [Test]
        public async Task TestUrlParam() 
        {
            // Parameters for the API call
            string url = "https://www.shahidisawesome.com/and/also/a/narcissist?thisis=aparameter&another=one";

            // Perform API call
            ServerResponse result = null;

            try
            {
                result = await controller.UrlParamAsync(url);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

    }
}
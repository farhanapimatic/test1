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
    public class ResponseTypesControllerTest : ControllerTestBase
    {
        /// <summary>
        /// Controller instance (for all tests)
        /// </summary>
        private static IResponseTypesController controller;

        /// <summary>
        /// Setup test class
        /// </summary>
        [SetUp]
        public static void SetUpClass()
        {
            controller = GetClient().ResponseTypes;
            applyConfiguration();
        }

        /// <summary>
        /// TODO: Add description for test TestGetDate 
        /// </summary>
        [Test]
        public async Task TestGetDate() 
        {

            // Perform API call
            DateTime? result = null;

            try
            {
                result = await controller.GetDateAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

 
            Assert.AreEqual(
                    DateTime.ParseExact("1994-02-13", "yyyy'-'MM'-'dd", CultureInfo.InvariantCulture, DateTimeStyles.RoundtripKind), result,
                    "Response should match expected value");
        }

        /// <summary>
        /// TODO: Add description for test TestGetDateArray 
        /// </summary>
        [Test]
        public async Task TestGetDateArray() 
        {

            // Perform API call
            List<DateTime> result = null;

            try
            {
                result = await controller.GetDateArrayAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            // Deserialize expected output
                        List<DateTime> expected = APIHelper.JsonDeserialize<List<DateTime>>(
                    "[\"1994-02-13\",\"1994-02-13\"]", new CustomDateTimeConverter("yyyy'-'MM'-'dd"));

            Assert.IsTrue(result.IsSuperSetOf(expected), "Response array should have matching values");
        }

        /// <summary>
        /// TODO: Add description for test TestGetStringEnumArray 
        /// </summary>
        [Test]
        public async Task TestGetStringEnumArray() 
        {

            // Perform API call
            List<Days> result = null;

            try
            {
                result = await controller.GetStringEnumArrayAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            // Deserialize expected output
                        List<Days> expected = APIHelper.JsonDeserialize<List<Days>>(
                    "[\"Tuesday\", \"Saturday\", \"Wednesday\", \"Monday\", \"Sunday\"]");

            Assert.IsTrue(result.IsSuperSetOf(expected), "Response array should have matching values");
        }

        /// <summary>
        /// TODO: Add description for test TestGet3339Datetime 
        /// </summary>
        [Test]
        public async Task TestGet3339Datetime() 
        {

            // Perform API call
            DateTime? result = null;

            try
            {
                result = await controller.Get3339DatetimeAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

 
            Assert.AreEqual(
                    DateTime.ParseExact("2016-03-13T12:52:32.123Z", "yyyy'-'MM'-'dd'T'HH':'mm':'ss.FFFFFFFK", CultureInfo.InvariantCulture, DateTimeStyles.RoundtripKind), result,
                    "Response should match expected value");
        }

        /// <summary>
        /// TODO: Add description for test TestGetDynamicArray 
        /// </summary>
        [Test]
        public async Task TestGetDynamicArray() 
        {

            // Perform API call
            dynamic result = null;

            try
            {
                result = await controller.GetDynamicArrayAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"method\":\"GET\",\"body\":{},\"uploadCount\":0}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestGetDynamic 
        /// </summary>
        [Test]
        public async Task TestGetDynamic() 
        {

            // Perform API call
            dynamic result = null;

            try
            {
                result = await controller.GetDynamicAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"method\":\"GET\",\"body\":{},\"uploadCount\":0}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestGetIntegerArray 
        /// </summary>
        [Test]
        public async Task TestGetIntegerArray() 
        {

            // Perform API call
            List<int> result = null;

            try
            {
                result = await controller.GetIntegerArrayAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            // Deserialize expected output
                        List<int> expected = APIHelper.JsonDeserialize<List<int>>(
                    "[1,2,3,4,5]");

            Assert.IsTrue(result.IsSuperSetOf(expected), "Response array should have matching values");
        }

        /// <summary>
        /// TODO: Add description for test TestGetBinary 
        /// </summary>
        [Test]
        public async Task TestGetBinary() 
        {

            // Perform API call
            Stream result = null;

            try
            {
                result = await controller.GetBinaryAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsSameAsFile("http://localhost:3000/response/image", result),
                    "Binary result content should match the given file");
        }

        /// <summary>
        /// TODO: Add description for test TestGetPrecision 
        /// </summary>
        [Test]
        public async Task TestGetPrecision() 
        {

            // Perform API call
            double? result = null;

            try
            {
                result = await controller.GetPrecisionAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

 
            Assert.AreEqual(
                    4.999, result, ASSERT_PRECISION,
                    "Response should match expected value");
        }

        /// <summary>
        /// TODO: Add description for test TestGetIntEnum 
        /// </summary>
        [Test]
        public async Task TestGetIntEnum() 
        {

            // Perform API call
            SuiteCode? result = null;

            try
            {
                result = await controller.GetIntEnumAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

 
            Assert.AreEqual(
                    (SuiteCode) int.Parse("3"), result,
                    "Response should match expected value");
        }

        /// <summary>
        /// TODO: Add description for test TestGetModelArray 
        /// </summary>
        [Test]
        public async Task TestGetModelArray() 
        {

            // Perform API call
            List<Person> result = null;

            try
            {
                result = await controller.GetModelArrayAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsArrayOfJsonObjectsProperSubsetOf(
                    "[{\"name\":\"Shahid Khaliq\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"boss\":{\"personType\":\"Boss\",\"name\":\"Zeeshan Ejaz\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\",\"promotedAt\":1484719381},\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\"},{\"name\":\"Shahid Khaliq\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"boss\":{\"personType\":\"Boss\",\"name\":\"Zeeshan Ejaz\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\",\"promotedAt\":1484719381},\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\"}]", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestGetStringEnum 
        /// </summary>
        [Test]
        public async Task TestGetStringEnum() 
        {

            // Perform API call
            Days? result = null;

            try
            {
                result = await controller.GetStringEnumAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

 
            Assert.AreEqual(
                    DaysHelper.ParseString("Monday"), result,
                    "Response should match expected value");
        }

        /// <summary>
        /// TODO: Add description for test TestGetModel 
        /// </summary>
        [Test]
        public async Task TestGetModel() 
        {

            // Perform API call
            Person result = null;

            try
            {
                result = await controller.GetModelAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"name\":\"Shahid Khaliq\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"boss\":{\"personType\":\"Boss\",\"name\":\"Zeeshan Ejaz\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\",\"promotedAt\":1484719381},\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\"}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestGetIntEnumArray 
        /// </summary>
        [Test]
        public async Task TestGetIntEnumArray() 
        {

            // Perform API call
            List<SuiteCode> result = null;

            try
            {
                result = await controller.GetIntEnumArrayAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            // Deserialize expected output
                        List<SuiteCode> expected = APIHelper.JsonDeserialize<List<SuiteCode>>(
                    "[1, 3, 4, 2, 3]");

            Assert.IsTrue(result.IsSuperSetOf(expected), "Response array should have matching values");
        }

        /// <summary>
        /// TODO: Add description for test TestGetInteger 
        /// </summary>
        [Test]
        public async Task TestGetInteger() 
        {

            // Perform API call
            int? result = null;

            try
            {
                result = await controller.GetIntegerAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

 
            Assert.AreEqual(
                    4, result,
                    "Response should match expected value");
        }

        /// <summary>
        /// TODO: Add description for test TestGetLong 
        /// </summary>
        [Test]
        public async Task TestGetLong() 
        {

            // Perform API call
            long? result = null;

            try
            {
                result = await controller.GetLongAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

 
            Assert.AreEqual(
                    5147483647L, result,
                    "Response should match expected value");
        }

        /// <summary>
        /// TODO: Add description for test TestGetUnixDateTimeArray 
        /// </summary>
        [Test]
        public async Task TestGetUnixDateTimeArray() 
        {

            // Perform API call
            List<DateTime> result = null;

            try
            {
                result = await controller.GetUnixDateTimeArrayAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            // Deserialize expected output
                        List<DateTime> expected = APIHelper.JsonDeserialize<List<DateTime>>(
                    "[1484719381,1484719381]", new UnixDateTimeConverter());

            Assert.IsTrue(result.IsSuperSetOf(expected), "Response array should have matching values");
        }

        /// <summary>
        /// TODO: Add description for test TestGet1123DateTimeArray 
        /// </summary>
        [Test]
        public async Task TestGet1123DateTimeArray() 
        {

            // Perform API call
            List<DateTime> result = null;

            try
            {
                result = await controller.Get1123DateTimeArrayAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            // Deserialize expected output
                        List<DateTime> expected = APIHelper.JsonDeserialize<List<DateTime>>(
                    "[\"Sun, 06 Nov 1994 08:49:37 GMT\",\"Sun, 06 Nov 1994 08:49:37 GMT\"]", new CustomDateTimeConverter("r"));

            Assert.IsTrue(result.IsSuperSetOf(expected), "Response array should have matching values");
        }

        /// <summary>
        /// TODO: Add description for test TestGetUnixDateTime 
        /// </summary>
        [Test]
        public async Task TestGetUnixDateTime() 
        {

            // Perform API call
            DateTime? result = null;

            try
            {
                result = await controller.GetUnixDateTimeAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

 
            Assert.AreEqual(
                    new DateTime(1970, 1, 1, 0, 0, 0, DateTimeKind.Utc).AddSeconds(double.Parse("1484719381")), result,
                    "Response should match expected value");
        }

        /// <summary>
        /// TODO: Add description for test TestGet1123DateTime 
        /// </summary>
        [Test]
        public async Task TestGet1123DateTime() 
        {

            // Perform API call
            DateTime? result = null;

            try
            {
                result = await controller.Get1123DateTimeAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

 
            Assert.AreEqual(
                    DateTime.ParseExact("Sun, 06 Nov 1994 08:49:37 GMT", "r", CultureInfo.InvariantCulture, DateTimeStyles.RoundtripKind), result,
                    "Response should match expected value");
        }

        /// <summary>
        /// TODO: Add description for test TestGetHeadersAllowExtra 
        /// </summary>
        [Test]
        public async Task TestGetHeadersAllowExtra() 
        {

            // Perform API call

            try
            {
                await controller.GetHeadersAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test headers
            Dictionary<string, string> headers = new Dictionary<string, string>();
            headers.Add("NauManAli", null);
            headers.Add("WaseemHasAn", null);

            Assert.IsTrue(TestHelper.AreHeadersProperSubsetOf (
                    headers, httpCallBackHandler.Response.Headers),
                    "Headers should match");

        }

        /// <summary>
        /// TODO: Add description for test TestGetBooleanArray 
        /// </summary>
        [Test]
        public async Task TestGetBooleanArray() 
        {

            // Perform API call
            List<bool> result = null;

            try
            {
                result = await controller.GetBooleanArrayAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            // Deserialize expected output
                        List<bool> expected = APIHelper.JsonDeserialize<List<bool>>(
                    "[true, false, true, true, false]");

            Assert.IsTrue(result.IsSuperSetOf(expected), "Response array should have matching values");
        }

        /// <summary>
        /// TODO: Add description for test TestGetBoolean 
        /// </summary>
        [Test]
        public async Task TestGetBoolean() 
        {

            // Perform API call
            bool? result = null;

            try
            {
                result = await controller.GetBooleanAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

 
            Assert.AreEqual(
                    true, result,
                    "Response should match expected value");
        }

        /// <summary>
        /// TODO: Add description for test TestGet3339DatetimeArray 
        /// </summary>
        [Test]
        public async Task TestGet3339DatetimeArray() 
        {

            // Perform API call
            List<DateTime> result = null;

            try
            {
                result = await controller.Get3339DatetimeArrayAsync();
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            // Deserialize expected output
                        List<DateTime> expected = APIHelper.JsonDeserialize<List<DateTime>>(
                    "[\"2016-03-13T12:52:32.123Z\",\"2016-03-13T12:52:32.123Z\",\"2016-03-13T12:52:32.123Z\"]", new IsoDateTimeConverter());

            Assert.IsTrue(result.IsSuperSetOf(expected), "Response array should have matching values");
        }

    }
}
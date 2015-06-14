<?php
require 'vendor/autoload.php';
use Aws\S3\S3Client;

$client = S3Client::factory();

/*
 * variables
 */
$bucketname = "aszelaszelaszel";

/*
 * create bucket
 */


echo "Start\n";
/*
echo "Creating bucket named {$bucketname}\n";
$result = $client->createBucket(array(
    'Bucket' => $bucketname
));

$client->waitUntilBucketExists(array('Bucket' => $bucketname));
*/
if($client->doesBucketExist($bucketname)) {
    echo "Bucket {$bucketname} exists\n";
}
/*
echo "Checking if bucket '{$bucketname}'' exists\n";

$exists = TRUE;
//$exists = $client->doesBucketExist($bucketname);
$exists = $client->doesBucketExist($bucketname);
if (empty($exists)) {
    echo "Bucket exists\n";
} else {
    echo "Bucket does not exist\n";
}
*/
echo "End\n";
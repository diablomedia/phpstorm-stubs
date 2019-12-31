<?php

// Start of mhash v.1.0

/**
 * Generates a key
 * @link https://php.net/manual/en/function.mhash-keygen-s2k.php
 * @param int $hash <p>
 * The hash ID used to create the key.
 * One of the <b>MHASH_hashname</b> constants.
 * </p>
 * @param string $password <p>
 * An user supplied password.
 * </p>
 * @param string $salt <p>
 * Must be different and random enough for every key you generate in
 * order to create different keys. Because <i>salt</i>
 * must be known when you check the keys, it is a good idea to append
 * the key to it. Salt has a fixed length of 8 bytes and will be padded
 * with zeros if you supply less bytes.
 * </p>
 * @param int $bytes <p>
 * The key length, in bytes.
 * </p>
 * @return string|false the generated key as a string, or <b>FALSE</b> on error.
 * @since 4.0.4
 * @since 5.0
 */
function mhash_keygen_s2k ($hash, $password, $salt, $bytes) {}

/**
 * Gets the block size of the specified hash
 * @link https://php.net/manual/en/function.mhash-get-block-size.php
 * @param int $hash <p>
 * The hash ID. One of the <b>MHASH_hashname</b> constants.
 * </p>
 * @return int|false the size in bytes or <b>FALSE</b>, if the <i>hash</i>
 * does not exist.
 * @since 4.0
 * @since 5.0
 */
function mhash_get_block_size ($hash) {}

/**
 * Gets the name of the specified hash
 * @link https://php.net/manual/en/function.mhash-get-hash-name.php
 * @param int $hash <p>
 * The hash ID. One of the <b>MHASH_hashname</b> constants.
 * </p>
 * @return string|false the name of the hash or <b>FALSE</b>, if the hash does not exist.
 * @since 4.0
 * @since 5.0
 */
function mhash_get_hash_name ($hash) {}

/**
 * Gets the highest available hash ID
 * @link https://php.net/manual/en/function.mhash-count.php
 * @return int the highest available hash ID. Hashes are numbered from 0 to this
 * hash ID.
 * @since 4.0
 * @since 5.0
 */
function mhash_count () {}

/**
 * Computes hash
 * @link https://php.net/manual/en/function.mhash.php
 * @param int $hash <p>
 * The hash ID. One of the <b>MHASH_hashname</b> constants.
 * </p>
 * @param string $data <p>
 * The user input, as a string.
 * </p>
 * @param string $key [optional] <p>
 * If specified, the function will return the resulting HMAC instead.
 * HMAC is keyed hashing for message authentication, or simply a message
 * digest that depends on the specified key. Not all algorithms
 * supported in mhash can be used in HMAC mode.
 * </p>
 * @return string|false the resulting hash (also called digest) or HMAC as a string, or
 * <b>FALSE</b> on error.
 * @since 4.0
 * @since 5.0
 */
function mhash ($hash, $data, $key = null) {}

/**
 * @since 7.4
 */
define ('MHASH_CRC32C', 34);
define ('MHASH_MD5', 1);
define ('MHASH_SHA1', 2);
define ('MHASH_HAVAL256', 3);
define ('MHASH_RIPEMD160', 5);
define ('MHASH_TIGER', 7);
define ('MHASH_GOST', 8);
define ('MHASH_CRC32B', 9);
define ('MHASH_HAVAL224', 10);
define ('MHASH_HAVAL192', 11);
define ('MHASH_HAVAL160', 12);
define ('MHASH_HAVAL128', 13);
define ('MHASH_TIGER128', 14);
define ('MHASH_TIGER160', 15);
define ('MHASH_MD4', 16);
define ('MHASH_SHA256', 17);
define ('MHASH_ADLER32', 18);
define ('MHASH_SHA224', 19);
define ('MHASH_SHA512', 20);
define ('MHASH_SHA384', 21);
define ('MHASH_WHIRLPOOL', 22);
define ('MHASH_RIPEMD128', 23);
define ('MHASH_RIPEMD256', 24);
define ('MHASH_RIPEMD320', 25);
define ('MHASH_SNEFRU256', 27);
define ('MHASH_MD2', 28);
define ('MHASH_FNV132', 29);
define ('MHASH_FNV1A32', 30);
define ('MHASH_FNV164', 31);
define ('MHASH_FNV1A64', 32);
define ('MHASH_JOAAT', 33);